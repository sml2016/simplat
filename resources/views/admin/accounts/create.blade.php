@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Create user</h2>
            <hr>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/accounts') }}">

                {!! csrf_field() !!}

                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nombre completo</label>
                    <div class="col-sm-10">
                        <input type="text" name="fullname" class="form-control" id="inputName" placeholder="Enter the full name" value="{{Request::old('fullname')}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter the email address" value="{{Request::old('email')}}"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputConfirm" class="col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control" id="inputConfirm" placeholder="Confirma contraseña" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                        <a href="{{ url('/admin/accounts') }}" class="btn btn-default">Cancelar</a>
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
