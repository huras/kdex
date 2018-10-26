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

        return redirect('/nodes/create');
    }

    public function edit(){
    }

    public function find(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        $nodes = Node::search($term)->limit(5)->get();

        $formatted_nodes = [];

        foreach ($nodes as $node) {
            $formatted_nodes[] = ['id' => $node->id, 'text' => $node->name];
        }

        return \Response::json($formatted_nodes);
    }
}
