@extends('layouts/main')

@section('title')
    Cadastro de Produtos
@endsection

@section('content')

<?php  ?>



    <div class='container'>        
        <div class='row' style='margin-top:25px; display: flex; width: 100%; justify-content: space-between;'>            
            <div class='col-6'>
                <a href='/produtos'> Listagem </a>
                <a href='/notebook'> Notebook </a>                
            </div>
            <div class='col-6' style='display: flex; width: 100%; justify-content: flex-end;'>                
                <a href='/sign_up'> Sign Up </a>
            </div>
        </div>
        @if($errors->all())
            <div class='alert alert-danger'>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class='row' style='margin-top:25px;' action='/login' method='POST'>
            {{ csrf_field() }}
            
            <div class='col-6'>
                <div class='form-group'>
                    <label> Email </label>
                    <input name='email' class='form-control'>
                </div>
            </div>

            <div class='col-6'>
                <div class='form-group'>
                    <label> Senha </label>
                    <input name='password' type='password' class='form-control'>
                </div>
            </div>

            <div class='col-12'>
                <button type='submit' class='btn btn-primary'>Enviar</button>
            </div>
            
        </form>
        </div>
    </div>
@endsection