<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact_UsController extends Controller
{
    public function index()
    {
        return view('pages.contact-us');
    }
}