@extends('layouts/main')

@section('title')
    {{count($produtos)}} Produtos
@endsection

@section('style')
<style>
    .danger{
        background-color: #ffb6b6;
    }
</style>
@endsection

@section('content')
    <div>
        <a href='/produtos/new'>Novo Produto </a>
    </div>
    <table class='table'>
        <tr>
            <td>nome</td>
            <td>valor</td>
            <td>descrição</td>
            <td>quantidade</td>
            <td>acao</td>
        </tr>
        @foreach ($produtos as $product)
            <tr class='{{$product->quantidade <= 1 ? "danger" : "" }}'>
                <td> {{ $product->nome }} </td>
                <td> {{ $product->valor }} </td>
                <td> {{ $product->descricao or 'Sem descrição' }} </td>
                <td> {{ $product->quantidade }} </td>
                <td>
                    <a href='/produtos/view?id={{ $product->id }}'> 
                        <i class="fas fa-search"></i>
                    </a> 
                    <a href='/produtos/view/{{ $product->id }}'> 
                        <i class="fas fa-search"></i>
                    </a>
                    <a href='/produtos/destroy/{{ $product->id }}'> 
                        <i class="fas fa-trash"></i>
                    </a>
                </td>              
            </tr>
        @endforeach
    </table>
@endsection