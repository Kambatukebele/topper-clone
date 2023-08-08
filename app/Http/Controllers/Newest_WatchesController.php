<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newest_WatchesController extends Controller
{
    public function index ()
    {
        return view("collections.newest-watches"); 
    }
}