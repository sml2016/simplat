@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Configuración</h2>
            <hr>
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Numero de participantes</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $settings->number_of_attendees }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Guarderia:</label>
                    <div class="col-sm-9">
                        <label class="control-label"></label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Limite de niños</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $settings->daycare_limit }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Edad minima</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $settings->daycare_min_age }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Edad maxima</label>
                    <div class="col-sm-9">
                        <label class="control-label">{{ $settings->daycare_max_age }}</label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Inscripciones</label>
                    <div class="col-sm-9">
                        @if ($settings->registration_state == 0)
                            <label class="control-label">No abiertas</label>
                        @elseif ($settings->registration_state == 1)
                            <label class="control-label">Abiertas</label>
                        @else
                            <label class="control-label">Cerradas</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="{{ url('/admin/settings/edit') }}" class="btn btn-primary">Editar</a>
                        <a href="{{ url('/admin') }}" class="btn btn-default">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
