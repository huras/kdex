<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;

use Learning\Model\NodeRelation;

class NodeRelationController extends Controller
{
    public function index(){
        $relations = NodeRelation::all();
        return view('node relations\index', compact('relations'));
    }

    public function create(){
        return view('node relations\create');
    }
}
