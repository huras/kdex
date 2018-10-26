<!-- 
    & becomes &amp;
    < becomes &lt;
    > becomes &gt;
    " becomes &quot;
    ' becomes &#39;
 -->

@extends('layouts/dashboard_system')

@section('title')
    Recortador
@endsection

@section('styles')
    <link href="{{ asset('css/custom/html.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-12'>
                <select class="select2 w-100" name="states[]" multiple>
                    <optgroup label="Alaskan/Hawaiian Time Zone">
                        <option value="AK">Alaska</option>
                        <option disabled="disabled" value="HI">Hawaii</option>
                        <option value="CA">California</option>
                    </optgroup>
                    <optgroup label="Pacific Time Zone">
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                    </optgroup>
                    
                </select>
            </div>
        </div>
    </div>
@endsection

@section('jqueries')
    <script>
        var data = [
            {
                id: 0,
                text: 'enhancement'
            },
            {
                id: 1,
                text: 'bug'
            },
            {
                id: 2,
                text: 'duplicate'
            },
            {
                id: 3,
                text: 'invalid'
            },
            {
                id: 4,
                text: 'wontfix'
            }
        ];

       $('.select2').select2({
            tags: true, //Select2 can dynamically create new options from text input by the user in the search box. This feature is called "tagging".
            // data : data,
            // ajax: {
            //     url: 'https://api.github.com/orgs/select2/repos',
            //     data: function (params) {
            //     var query = {
            //         search: params.term,
            //         type: 'public'
            //     }

            //     // Query parameters will be ?search=[term]&type=public
            //     return query;
            //     }
            // },
        });
    </script>
@endsection