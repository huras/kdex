<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function html(){
        return view('html/html');
    }
}
