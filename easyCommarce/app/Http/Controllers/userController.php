<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function users(){
      return view('admin.users.users');
    }
}
