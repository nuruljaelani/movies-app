<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BacksiteController extends Controller
{
    public function index()
    {
        return view('pages.dashboard');
    }
}
