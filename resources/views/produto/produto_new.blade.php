@extends('layouts/main')

@section('title')
    Cadastro de Produtos
@endsection

@section('content')

<?php  ?>



    <div class='container'>        
        <div>
            <a href='/produtos'> Listagem </a>
            <a href='/logout'> Logout </a>
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
        <form class='row' style='margin-top:25px;' action='/produtos/store' method='POST'>
            {{ csrf_field() }}
            
            <div class='col-4'>
                <div class='form-group'>
                    <label> Nome </label>
                    <input name='nome' class='form-control'>
                </div>
            </div>

            <div class='col-4'>
                <div class='form-group'>
                    <label> Valor </label>
                    <input name='valor' class='form-control'>
                </div>
            </div>

            <div class='col-4'>
                <div class='form-group'>
                    <label> Quantidade </label>
                    <input name='quantidade' class='form-control'>
                </div>
            </div>

            <div class='col-6'>
                <div class='form-group'>
                    <label> Tamanho </label>
                    <input name='tamanho' class='form-control'>
                </div>
            </div>

            <div class='col-6'>
                <div class='form-group'>
                    <label> Categoria </label>
                    <select name='categoria_id' class='form-control'>
                        @foreach($categorias as $categoria)
                            <option value='{{$categoria->id}}'>{{$categoria->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class='col-12'>
                <div class='form-group'>
                    <label> Descrição </label>
                    <textarea name='descricao' class='form-control'></textarea>
                </div>
            </div>

            <div class='col-12'>
                <button type='submit' class='btn btn-primary'>Enviar</button>
            </div>
        </form>
        </div>
    </div>
@endsection