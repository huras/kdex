@extends('layouts/main')

@section('title')
    {{count($parents)}} Notes
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

    <br>
    Parents
    <table>
        <tr>
            <td class='title'> Title </td>
        </tr>

        <?php foreach ($parents as $parent) : ?>
            <tr>
                <td class='content'>
                    <?= $parent->title ?>
                </td>
            </tr>
        <?php endforeach ?>
        
    </table>

        <br>
    Childs
    <table>
        <tr>
            <td class='title'> Title </td>
        </tr>        
        

        <?php foreach ($childs as $child) : ?>
            <tr>
                <td class='content'>
                    <?= $child->title ?>
                </td>
            </tr>
        <?php endforeach ?>
        
    </table>
@endsection