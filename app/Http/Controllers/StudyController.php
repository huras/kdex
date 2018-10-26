<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function htmls(){
        return view('html/htmls');
    }

    public function snesRoms(){
        return view('html/snesGames');
    }
}
