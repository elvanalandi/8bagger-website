<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OurClass;

class ClassController extends Controller
{
    public function getClass(){
        $classes = OurClass::orderBy('id','ASC')->get();
        return view('class.index',compact('classes'));
    }
}
