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
            <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Type</th>
                <th scope="col">Name</th>
                <th scope="col">Short Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nodes as $node) : ?>
                    <tr>
                    <th scope="row">{{$node->id}}</th>
                    <td>{{$node->Type->name}}</td>
                    <td>{{$node->name}}</td>
                    <td>{{$node->short_description}}</td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
    </div>    
@endsection