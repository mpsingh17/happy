<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct() 
    {
        $this->middleware('guest');
    }

    public function home()
    {
        return view('pages.home');
    }
}
