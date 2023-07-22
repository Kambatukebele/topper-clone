<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchesController extends Controller
{
    public function index()
    {
        return view('collections.watches'); 
    }
}