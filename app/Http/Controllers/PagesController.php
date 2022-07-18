<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function blog()
    {
        return view('/blog/index');
    }

    public function detail()
    {
        return view('/blog/detail');
    }

    public function class()
    {
        return view('/class/index');
    }
}
