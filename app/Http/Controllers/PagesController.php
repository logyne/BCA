<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

        return 'INDEx';
    }
    public function about(){

        return view ('Pages.about');
    }
    public function services(){

        return view ('Pages.services');
    }
}
