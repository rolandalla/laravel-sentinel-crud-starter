<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home($value='')
    {
    	return view('welcome');
    }
    public function dashboard($value='')
    {
    	return view('backEnd.dashboard');
    }
}
