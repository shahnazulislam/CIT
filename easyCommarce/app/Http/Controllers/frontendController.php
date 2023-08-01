<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontendController extends Controller
{
    function index(){
      return view('welcome');
    }

    function about(){
      return view('about');
    }
    function contact(){
      return view('contact');
    }
    function services(){
      return view('services');    
    }
    function users(){
      return view('users');
    }
}