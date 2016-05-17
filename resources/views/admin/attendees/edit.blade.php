@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Editar participante</h2>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/attendees/'.$attendee->id) }}">

                {!! csrf_field() !!}
                <input name="_method" type="hidden" value="PUT">

                <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-9">
                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Nombre" value="{{Request::old('name', $attendee->name)}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLastName" class="col-sm-3 control-label">Apellido</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastname" class="form-control" id="inputLastName" placeholder="Apellido" value="{{Request::old('lastname', $attendee->last_name)}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-3 control-label">Correo electrónico</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Dirección del correo electrónico" value="{{Request::old('email', $attendee->email)}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPhone" class="col-sm-3 control-label">Teléfono</label>
                    <div class="col-sm-9">
                        <input type="text" name="phonenumber" class="form-control" id="inputPhone" placeholder="Teléfono" value="{{Request::old('phonenumber', $attendee->phone_number)}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputWaitingList" class="col-sm-3 control-label">Lista de espera:</label>
                    <div class="col-sm-9">
                        <select name="waitinglist" id="inputWaitingList" class="form-control">
                          <option value="0" {{ $attendee->waiting_list ? '' : 'selected' }}>No</option>
                          <option value="1" {{ $attendee->waiting_list ? 'selected' : '' }}>Yes</option>
                        </select>
                    </div>
                </div>
                <!-- 
                    Add and Cancel buttons
                -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        <a href="{{ url('/admin/attendees/'.$attendee->id) }}" class="btn btn-default">Cancelar</a>
                    </div>
                </div>
            </form>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
