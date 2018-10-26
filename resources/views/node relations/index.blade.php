@extends('layouts/dashboard_system')

@section('title')
    Node Relations
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Head</th>
                        <th scope="col">Tail</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach ($relations as $relation) : ?>
                        <tr>
                            <th scope="row">{{$relation->id}}</th>
                            <td>{{$relation->Head->name}}</td>
                            <td>{{$relation->Tail->name}}</td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>    
@endsection