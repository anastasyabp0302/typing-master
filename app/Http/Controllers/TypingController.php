<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypingController extends Controller
{
    public function index()
    {
        return view('typing');
    }

    public function submit(Request $request)
    {
        // Handle the submitted typing results here
    }
}