@extends('layouts/main')

@section('title')
    {{$topic->title}}
@endsection

@section('style')
    <style>
        td {
            border: 1px solid black;
        }

        td.title{
            text-align: center;                
        }

        td.actions a{
            /* text-decoration: none;
            color:inherit; */
        }
    </style>
@endsection

@section('content')
    <a href='/notebook' > Topics </a>
    <h1> {{$topic->title}} </h1>
@endsection