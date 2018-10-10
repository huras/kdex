@extends('layouts/main')

@section('title')
    Cadastro de Topics
@endsection

@section('content')
    <div class='container'>        
        <div class='row' style='margin-top:25px; display: flex; width: 100%; justify-content: center;'>
            Topic Add
        </div>
        <form class='row' style='margin-top:25px;' action='/notebook/store' method='POST'>
            {{ csrf_field() }}
            
            <div class='col-6'>
                <div class='form-group'>
                    <label> Title </label>
                    <input name='title' class='form-control'>
                </div>
            </div>

            <div class='col-6'>
                <div class='form-group'>
                    <label> URL </label>
                    <input name='url' class='form-control'>
                </div>
            </div>

            <div class='col-12'>
                <button type='submit' class='btn btn-primary'>Enviar</button>
            </div>
        </form>
        </div>
    </div>
@endsection