@extends('layouts/main')

@section('title')
    Topics Parenting
@endsection

@section('content')
    <div class='container'>        
        <div class='row' style='margin-top:25px; display: flex; width: 100%; justify-content: center;'>
            Topic Add
        </div>
        <form class='row' style='margin-top:25px;' action='/notebook/parenting/store' method='POST'>
            {{ csrf_field() }}
            
            <div class='col-6'>
                <div class='form-group'>
                    <label> Parent </label>
                    <select name='parent_id' class='form-control'>
                        @foreach($topics as $topic)
                            <option value='{{$topic->id}}'> {{$topic->nome}} </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class='col-6'>
                <div class='form-group'>
                    <label> Child </label>
                    <select name='child_id' class='form-control'>
                        @foreach($topics as $topic)
                            <option value='{{$topic->id}}'> {{$topic->nome}} </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class='col-12'>
                <button type='submit' class='btn btn-primary'>Enviar</button>
            </div>
        </form>
        </div>
    </div>
@endsection