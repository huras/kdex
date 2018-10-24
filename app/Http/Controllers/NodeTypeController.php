<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;

use Learning\Model\NodeType;

class NodeTypeController extends Controller
{
    public function index(){
        $nodeTypes = NodeType::all();
        return view('node types/index', compact('nodeTypes'));
    }
}
