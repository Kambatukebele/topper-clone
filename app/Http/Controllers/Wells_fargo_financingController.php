<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Wells_fargo_financingController extends Controller
{
    public function index()
    {
        return view('pages.wells-fargo-financing');
    }
}