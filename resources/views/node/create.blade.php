@extends('layouts/dashboard_system')

@section('title')
    New Node
@endsection

@section('content')
    <div class='container'>
        
            <form class='row' style='margin-top:25px;' action='/nodes/create' method='POST'>
                {{ csrf_field() }}
                
                <div class='col-8'>
                    <div class='form-group'>
                        <label> Name </label>
                        <input name='name' class='form-control'>
                    </div>
                </div>

                <div class='col-4'>
                    <div class='form-group'>
                        <label> Type </label>
                        <select name='type_id' class='form-control'>                    
                            <?php foreach ($nodeTypes as $nodeType) : ?>
                                <option value="{{$nodeType->id}}">{{$nodeType->name}}</option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class='col-6'>
                    <div class='form-group'>
                        <label> Short Description </label>
                        <textarea name='short_description' class='form-control' maxlength='500' rows="4"></textarea>
                    </div>
                </div>

                <div class='col-12'>
                    <button type='submit' class='btn btn-primary'>Enviar</button>
                </div>
            </form>
        
    </div>
@endsection