<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;

class DashboardSystemController extends Controller
{
    public function home(){
        return view('pages/home');
    }
}
