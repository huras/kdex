@extends('layouts/main')

@section('title')
    {{count($parentings)}} Notes
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
    Parents
    <table>
        <tr>
            <!-- <td class='title'> Title </td> -->
            <td class=''> Parent </td>
            <td class=''> Child </td>
        </tr>
        
        <?php dd($childings); ?>

        <?php foreach ($parentings as $parenting) : ?>
            <tr>
                <td class='content'>
                    <?= $parenting->parent_id ?>
                </td>
                <td class='content'>
                    <?= $parenting->child_id ?>
                </td>
            </tr>
        <?php endforeach ?>
        
    </table>

    Childs
    <table>
        <tr>
            <!-- <td class='title'> Title </td> -->
            <td class=''> Parent </td>
            <td class=''> Child </td>
        </tr>
        
        <?php dd($parentings); ?>

        <?php foreach ($parentings as $parenting) : ?>
            <tr>
                <td class='content'>
                    <?= $parenting->parent_id ?>
                </td>
                <td class='content'>
                    <?= $parenting->child_id ?>
                </td>
            </tr>
        <?php endforeach ?>
        
    </table>
@endsection