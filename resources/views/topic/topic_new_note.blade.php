@extends('layouts/main')

@section('title')
    Add Note To {{$topic->title}}
@endsection

@section('content')
    <div class='container'>        
        <div class='row' style='margin-top:25px; display: flex; width: 100%; justify-content: center;'>
            {{$topic->title}} New Note
        </div>
        <div>            
            <a href='/notebook'>Topics </a>
            <a href='{{route("note.list", $topic->id)}}'> All "{{$topic->title}}" Notes </a>
        </div>
        <form class='row' style='margin-top:25px;' action='{{route("note.store", $topic->id)}}' method='POST'>
            {{ csrf_field() }}
            
            <input type='hidden' name='topic_id' class='form-control' value='{{$topic->id}}'>

            <div class='col-12'>
                <div class='form-group'>
                    <label> Note </label>
                    <input name='content' class='form-control'>
                </div>
            </div>

            <div class='col-12'>
                <button type='submit' class='btn btn-primary'>Enviar</button>
            </div>
        </form>
        </div>
    </div>
@endsection