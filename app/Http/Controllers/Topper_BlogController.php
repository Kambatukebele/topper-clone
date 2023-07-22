<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Topper_BlogController extends Controller
{
    public function index()
    {
        return view('blogs.topper-blog'); 
    }
}