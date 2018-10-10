<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Learning\Model\Topic;

class KnowledgeController extends Controller
{
    public function list(){
        $topics = Topic::all();
        return view('topic/topic_list', compact('topics'));
    }

    public function view(Request $request, $id = null){
        if(!$id){
            $id = $request->input('id');
        }
        $topic = DB::select('select * from topics where id = '.$id);
        
        if($topic)
            $topic = $topic[0];
        else
            return 'Este topico não existe';

        return view('topic/topic_view', compact('topic'));
    }

    public function new(){
        return view('topic/topic_new');
    }

    public function store(Request $request){
        $title = $request->input('title');
        $url = $request->input('url');        
        
        DB::insert('insert into topics (title, url) values (?,?)', array($title, $url));

        return redirect('/notebook');
    }
}
