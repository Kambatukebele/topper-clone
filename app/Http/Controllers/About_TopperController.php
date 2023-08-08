<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About_TopperController extends Controller
{
    public function index()
    {
        return view('pages.about-topper'); 
    }

    
}