<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::view('/', 'welcome');
Auth::routes();


Route::get('/login/customer', [LoginController::class,'showCustomerLoginForm']);

Route::get('/register/customer', [RegisterController::class,function(){
    return view('auth.register', ['url' => 'customer']);



}]);
Route::redirect('/login', '/login/customer');
Route::redirect('/register', '/register/customer');


Route::post('/login/customer', [LoginController::class,'customerLogin']);

Route::post('/register/customer', [RegisterController::class,function(Request $request){

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:customers',
        'password' => 'required|string|min:6|confirmed',
    ]);
    customer::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect()->intended('login/customer');

    
}]);

Route::group(['middleware' => 'auth:customer'], function () {
    Route::view('/customer', 'customer');
});



Route::get('logout', [LoginController::class,'logout']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
