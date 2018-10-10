@extends('layouts/main')

@section('title')
    {{$produto->nome}}
@endsection

@section('content')
    <h1> Detalhes do Produto  {{$produto->nome}} </h1>
@endsection