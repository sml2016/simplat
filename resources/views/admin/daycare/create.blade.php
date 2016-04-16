@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Editar niño(a)</h2>
            <hr>
            <h4>Mama: {{ $mother->name.' '.$mother->last_name }}</h4>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/attendees/'.$mother->id.'/daycare') }}">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" maxlength="60" placeholder="Enter name" value="{{Request::old('name')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastName" class="col-sm-2 control-label">Apellido</label>
                    <div class="col-sm-10">
                        <input type="text" name="lastName" class="form-control" id="lastName" maxlength="60" placeholder="Enter last name" value="{{Request::old('lastName')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="sex" class="col-sm-2 control-label">Sexo</label>
                    <div class="col-sm-10">
                        <select name="sex" id="sex" class="form-control">
                                <option value="0">Masculino</option>
                                <option value="1">Femenino</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-2 control-label">Edad</label>
                    <div class="col-sm-10">
                        <select name="age" id="age" class="form-control">
                            @for($age = $settings->daycare_min_age ; $age <= $settings->daycare_max_age ; $age++)
                                <option value="{{$age}}">{{$age}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="waitinglist" class="col-sm-2 control-label">Lista de espera</label>
                    <div class="col-sm-10">
                        <select name="waitinglist" id="waitinglist" class="form-control">
                            <option value="0">No</option>
                            <option value="1">Si</option>
                        </select>
                    </div>
                </div>
                <!-- 
                    Add and Cancel buttons
                -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                        <a href="{{ url('/admin/attendees/'.$mother->id) }}" class="btn btn-default">Cancelar</a>
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
