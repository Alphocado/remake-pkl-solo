<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
  public function index()
  {
    return view('signup', [
      'title' => 'Sign Up'
    ]);
  }
}
