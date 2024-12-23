<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function doc()
    {
        return view('documents.index');
    }

    public function letter()
    {
        return view('letter');
    }
}
