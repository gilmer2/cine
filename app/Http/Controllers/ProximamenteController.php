<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProximamenteController extends Controller
{
    public function index()
    {
        return view('proximamente');
    }
}
