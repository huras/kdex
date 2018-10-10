@extends('layouts/main')

@section('title')
    {{count($topics)}} Topics
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
        <a href='/notebook/new'>Novo Topic </a>
    </div>
    <table>
        <tr>
            <td class='title'> Title </td>
            <td class='actions'> Actions </td>
        </tr>
        
        <?php foreach ($topics as $topic) : ?>
            <tr>
                <td class='title'> 
                    <?= $topic->title ?>                        
                </td>
                <td class='actions'> 
                    <a href='/notebook/view/{{$topic->id}}' title='View'>
                        <i class="fas fa-eye"></i>
                    </a>
                    <a href='' title='Parentings'> 
                        <i class="fas fa-cubes"></i>
                    </a>
                    <a href='<?= $topic->url ?>' target='_blank' title='URLs' > 
                        <i class="fa fa-link"></i> 
                    </a>
                    <a href='/notebook/edit/{{$topic->id}}' title='Edit'>
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
        
    </table>
@endsection