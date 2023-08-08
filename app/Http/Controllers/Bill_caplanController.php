<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bill_caplanController extends Controller
{
    public function index()
    {
        return view('pages.bill-caplan'); 
    }
}