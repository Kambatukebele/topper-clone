<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JewelryController extends Controller
{
    public function index()
    {
        return view('collections.jewelry'); 
    }
}