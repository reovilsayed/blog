<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $data)
    {
       $data->validate([
           'name' =>['required','min:4'],
           'email' =>['required','email'],
           'password' =>['required','min:8'],
       ]);
    }
}
