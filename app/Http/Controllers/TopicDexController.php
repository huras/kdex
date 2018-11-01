<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;

use Learning\Model\Topico;

class TopicDexController extends Controller
{
    public function all(){
        $topicos = Topico::all();
        return view('topico\topico-all', compact('topicos'));
    }

    public function explore($id){

    }

    public function view($id){

    }

    public function roots($id){

    }
}
