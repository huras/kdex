@extends('layouts/dashboard_system')

@section('title')
    Node Types
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <table class="table table-hover table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>        
                </tr>
            </thead>
            <tbody>
                <?php foreach ($nodeTypes as $nodeType) : ?>
                    <tr>
                    <th scope="row">{{$nodeType->id}}</th>
                    <td>{{$nodeType->name}}</td>            
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
    </div>
@endsection