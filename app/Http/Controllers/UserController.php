<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
        return view('layout.home');
    }

    function about(){
        return view('layout.about');
    }

    function contact(){
        return view('layout.contact');
    }
}
