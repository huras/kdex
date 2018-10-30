@extends('layouts/dashboard_system')

@section('title')
    Nodes
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary w-100">                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="/nodes">Nodes <span class="sr-only">Lists all Nodes</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="/nodes/create">New Node <span class="sr-only">Lists all Nodes</span></a>
                        </li>
                    </ul>                    
                </div>
            </nav>
        </div>
        <div class='row'>
            <?php foreach ($nodes as $node) : ?>
                <div class='col-6'>                
                    <div class='node-item' id='item-{{$node->id}}'>
                        <div class='cabeca' data-toggle="collapse" data-target="#item-{{$node->id}}-tray" onclick='toggleItemActiveClass("item-{{$node->id}}", "node-item")'>
                            <div class='titulo'> {{$node->name}} </div>
                            <div class='acoes'>
                                <div class='colapse-btn open-btn' data-toggle="collapse" data-target="#item-{{$node->id}}-tray" onclick='toggleItemActiveClass("item-{{$node->id}}", "node-item")'>
                                    <i class='fa fa-angle-down'></i>
                                </div>
                                <div class='colapse-btn close-btn' data-toggle="collapse" data-target="#item-{{$node->id}}-tray" onclick='toggleItemActiveClass("item-{{$node->id}}", "node-item")'>
                                    <i class='fa fa-angle-up'></i>
                                </div>
                            </div>
                        </div>
                        <div class='sub-lista collapse' id="item-{{$node->id}}-tray">
                            <table class="table table-hover table-dark">
                                <thead>
                                    <tr>                                    
                                        <th scope="col">Type</th>
                                        <th scope="col">Short Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                            
                                        <td>{{$node->Type->name}}</td>
                                        <td>{{$node->short_description}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>    
@endsection