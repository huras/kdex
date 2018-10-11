@extends('layouts/main')

@section('title')
    {{count($notes)}} Notes
@endsection

@section('style')
    <!-- Styles -->
    <style>
        td {
            border: 1px solid black;
        }

        td.title{
            text-align: center;                
        }

        td.actions a{
            /* text-decoration: none;
            color:inherit; */
            font-size: 16px;
        }
        td.actions a:hover{
            text-decoration: none;
        }
    </style>
@endsection

@section('content')
    <div>
        {{$topic->title}} Notes
    </div>
    <div>
        <a href='/notebook'> Topics </a>
        <a href='{{ route("note.new", $topic->id)}}'> New Note </a>
    </div>
    <table>
        <tr>
            <!-- <td class='title'> Title </td> -->
            <td class=''> Content </td>            
        </tr>
        
        <?php foreach ($notes as $note) : ?>
            <tr>
                <!-- <td class='title'> 
                    <?= $note->topic->title ?>
                </td> -->
                <td class='content'> 
                    <?= $note->content ?>                        
                </td>                
            </tr>
        <?php endforeach ?>
        
    </table>
@endsection