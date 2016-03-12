@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>{{ $child->name }} {{ $child->last_name }}</h2>
            <hr>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Edad:</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $child->age }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Sexo:</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $child->sex ? 'Masculino' : 'Femenino' }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Mamá:</label>
                    <div class="col-sm-9">
                        <a href="{{ url('/admin/attendees/'.$mother->id) }}">{{ $mother->name.' '.$mother->last_name}}</a>
                    </div>
                </div>
                <!-- 
                    Edit and Back buttons
                -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <a href="{{ url('/admin/daycare/'.$child->id.'/edit') }}" class="btn btn-primary">Editar</a>
                        <a href="{{ url('/admin/daycare') }}" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
