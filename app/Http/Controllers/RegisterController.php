<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function showRegistrationForm(Request $request)
   {
       return view('auth.register');

   }
}
