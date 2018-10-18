<?php

namespace Learning\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Learning\Model\Topic;
use Learning\Model\TopicParenting;
use Learning\Model\ItemNote;

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

    public function notes($id){
        $topic = Topic::find($id);        
        if(!$topic)
            return 'Este topico não existe';

        // $notes = ItemNote::where('topic_id', $id)->get();
        $notes = $topic->notes;
        return view('topic/topic_notes', compact('notes','topic'));
    }

    public function newNote($id){
        $topic = Topic::find($id);        
        if(!$topic)
            return 'Este topico não existe';

        return view('topic/topic_new_note', compact('topic'));
    }

    public function storeNewNote(Request $request, $id){
        ItemNote::create($request->all());
        return redirect(route('note.list', $id));
    }

    public function parentings($id){
        $topic = Topic::find($id);        
        if(!$topic)
            return 'Este topico não existe';

        // $notes = ItemNote::where('topic_id', $id)->get();
        $parents = DB::table('topic_parentings')->join('topics','topic_parentings.parent_id', '=', 'topics.id')
                                                ->select('topic_parentings.*', 'topics.*')
                                                ->where('child_id', $id)
                                                ->get();

        $childs = DB::table('topic_parentings')->join('topics','topic_parentings.child_id', '=', 'topics.id')
                                                ->select('topic_parentings.*', 'topics.*')
                                                ->where('parent_id', $id)
                                                ->get();

        //  TopicParenting::where('parent_id', $id)->get();
        // $childs = TopicParenting::where('child_id', $id)->get();
        return view('topic/topic_parentings', compact('parents','childs','topic'));
    }
}
