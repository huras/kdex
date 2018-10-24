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

        .topics-table{
            margin-top: 30px;
            width:100%;
            display:flex;
            justify-content: center;
            align-items:center;
        }

        .topics-table i{
            
        }

        .topics-table table{
            margin-left: 15px;   
        }
    </style>
@endsection

@section('content')
    <div>
        {{$topic->title}} Notes
    </div>
    <div style='display:flex; flex-direction:column;'>
        <a href='/notebook'> All Topics </a>
        <a href='{{ route("note.new", $topic->id)}}'> New Note </a>
    </div>

    <div class='topics-table'>
        <i class='fa fa-umbrella'></i> Parents
        <table>
            <tr>
                <td class='title'> Title </td>
                <td class='title'> Actions </td>
            </tr>            

            <?php foreach ($parents as $topic) : ?>
                <tr>
                    <td class='title'> 
                        <?= $topic->title ?>                        
                    </td>
                    <td class='actions'> 
                        <a href='/notebook/view/{{$topic->id}}' title='View'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href='{{route("parenting.list", $topic->id)}}' title='Parentings'> 
                            <i class="fas fa-cogs"></i>
                        </a>
                        <a href='<?= $topic->url ?>' target='_blank' title='URLs' > 
                            <i class="fa fa-link"></i> 
                        </a>
                        <a href='/notebook/edit/{{$topic->id}}' title='Edit'>
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href='/notebook/notes/{{$topic->id}}' title='Notes'>
                            <i class="fas fa-cubes"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>

    <div class='topics-table'>
        <i class='fa fa-child'></i> Childs
        <table>
            <tr>
                <td class='title'> Title </td>
                <td class='title'> Actions </td>
            </tr>            

            <?php foreach ($childs as $topic) : ?>
                <tr>
                    <td class='title'> 
                        <?= $topic->title ?>                        
                    </td>
                    <td class='actions'> 
                        <a href='/notebook/view/{{$topic->id}}' title='View'>
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href='{{route("parenting.list", $topic->id)}}' title='Parentings'> 
                            <i class="fas fa-cogs"></i>
                        </a>
                        <a href='<?= $topic->url ?>' target='_blank' title='URLs' > 
                            <i class="fa fa-link"></i> 
                        </a>
                        <a href='/notebook/edit/{{$topic->id}}' title='Edit'>
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href='/notebook/notes/{{$topic->id}}' title='Notes'>
                            <i class="fas fa-cubes"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
@endsection