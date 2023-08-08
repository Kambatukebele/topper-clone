<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pre_OwnedController extends Controller
{
    public function index()
    {
        return view('collections.pre-owned'); 
    }
}