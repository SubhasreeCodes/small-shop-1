<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend/home');
    }

    public function login(Request $request)
    {
        return view('frontend/login');
    }

    public function register(Request $request)
    {
        return view('frontend/register');
    }

    public function forget_password(Request $request)
    {
        return view('frontend/forget_password');
    }

    public function about(Request $request)
    {
        return view('frontend/about');
    }
}
