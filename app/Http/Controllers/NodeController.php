<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;

use Learning\Model\Node;
use Learning\Model\NodeType;

class NodeController extends Controller
{
    public function index(){
        $nodes = Node::all();
        return view('node/index', compact('nodes'));
    }

    public function create(){
        $nodeTypes = NodeType::all();
        return view('node/create', compact('nodeTypes'));
    }

    public function store(Request $request){
        Node::create($request->all());        

        return redirect('/nodes');
    }

    public function edit(){
    }
}
