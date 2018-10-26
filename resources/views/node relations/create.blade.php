@extends('layouts/dashboard_system')

@section('title')
    New Node Relation
@endsection

@section('content')
    <div class='container'>
        
            <form class='row' style='margin-top:25px;' action='/node-relations/create' method='POST'>
                {{ csrf_field() }}
                
                <div class='col-6'>
                    <div class='form-group'>
                        <label> Head </label>
                        <select class="node-select2 w-100" name="name">

                        </select>
                    </div>
                </div>

                <div class='col-6'>
                    <div class='form-group'>
                        <label> Tail </label>
                        <select class="node-select2 w-100" name="tail">

                        </select>
                    </div>
                </div>

                <div class='col-12'>
                    <button type='submit' class='btn btn-primary'>Enviar</button>
                </div>
            </form>
        
    </div>
@endsection

@section('jqueries')
    <script>
        $('.node-select2').select2({
            placeholder: "Choose a node...",
            minimumInputLength: 2,
            theme: "classic",            
            ajax: {
                url: '/nodes/find',
                dataType: 'json',
                data: function (params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function (data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    </script>
@endsection