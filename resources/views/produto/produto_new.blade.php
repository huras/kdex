@extends('layouts/main')

@section('title')
    Cadastro de Produtos
@endsection

@section('content')
    <div class='container'>        
        <div class='row' style='margin-top:25px; display: flex; width: 100%; justify-content: center;'>
            Produto Add
        </div>
        <form class='row' style='margin-top:25px;' action='/produtos/store' method='POST'>
            {{ csrf_field() }}
            
            <div class='col-6'>
                <div class='form-group'>
                    <label> Nome </label>
                    <input name='nome' class='form-control'>
                </div>
            </div>

            <div class='col-6'>
                <div class='form-group'>
                    <label> Valor </label>
                    <input name='valor' class='form-control'>
                </div>
            </div>

            <div class='col-6'>
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