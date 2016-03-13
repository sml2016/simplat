@extends('layouts.master')
@section('content')
<div class="naranjaR"></div>

<div class="container">
  <div class="fondo1">
    <form type="POST" role="form" method="POST" action="{{ url('/registro') }}">

      {!! csrf_field() !!}

      <div class="section1R">
        <h1>{{ trans('registro.titulo') }}</h1>
        <div class="form-group-lg">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              <label for="InputNombre">{{ trans('registro.nombre') }}</label>
              <input type="text" class="form-control" id="InputNombre" placeholder="{{ trans('registro.nombre') }}" name="name" value="{{Request::old('name')}}" required>
              <label for="InputApellido">{{ trans('registro.apellido') }}</label>
              <input type="apellido" class="form-control" id="InputApellido" placeholder="{{ trans('registro.apellido') }}" name="lastname" value="{{Request::old('lastname')}}" required>
              <label for="InputTel">Teléfono</label>
              <input type="telefono" class="form-control" id="InputTel" placeholder="Teléfono" name="phonenumber" value="{{Request::old('phonenumber')}}" required>
              <label for="InputEmail">Correo Electrónico</label>
              <input type="Correo Eléctronico" class="form-control" id="InputEmail" placeholder="Correo Electrónico" name="email" value="{{Request::old('email')}}" required>
            </div>
          </div>
        </div>
      </div>
      <div class="section2R">
        <h1>¿Necesita servicio de guardería?</h1>
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="radio">
              <label>
                <input type="radio" name="needsdaycare" id="opciones_1" value="si" {{ Request::old('needsdaycare') == 'si' ? 'checked="checked"' : '' }}>
              Si </label>
              <label>
                <input type="radio" name="needsdaycare" id="opciones_2" value="no" {{ Request::old('needsdaycare') == 'no' ? 'checked="checked"' : '' }}>
              No </label>
            </div>
          </div>
        </div>
      </div>
      <div class="section3R" style="display:none">
      <h1>¿Cuántos niños o niñas va a registrar?</h1>  
      <h2>Cada participante puede registrar máximo dos menores de edad entre 3 y 11 años de edades.</h2>
       
        <div class="row">
          <div class="col-xs-6 col-xs-offset-3 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="ninos">
              <select id="daycarenumber" name="daycarenumber" class="form-control input-lg">
                <option value="1" {{ Request::old('daycarenumber') == '1' ? 'selected' : '' }}>Uno</option>
                <option value="2" {{ Request::old('daycarenumber') == '2' ? 'selected' : '' }}>Dos</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="section4R" style="display:none">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <h1>Niña(o) número 1</h1>
            <div class="form-group-lg">
              <label for="InputNombreN1">Nombre</label>
              <input type="text" class="form-control" id="InputNombreN1" placeholder="Nombre">
              <label for="InputApellidoN1">Apellido</label>
              <input type="apellido" class="form-control" id="InputApellidoN1" placeholder="Apellido">
            </div>
            <h2>Edad </h2>
            <div class="nino1">
              <select name="child1age" id="child1Age" class="form-control input-lg">
                  @for($age = $settings->daycare_min_age ; $age <= $settings->daycare_max_age ; $age++)
                    <option value="{{$age}}">{{$age}}</option>
                  @endfor
              </select>
              
              <h3>Género </h3>
              <select class="form-control input-lg">
                <option >Femenino</option>
                <option >Masculino</option>
              </select>
            </div>
          </div>
          
        </div>
      </div>
      <div class="section5R" style="display:none">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <h1>Niña(o) número 2</h1>
            <div class="form-group-lg">
              <label for="InputNombreN2">Nombre</label>
              <input type="text" class="form-control" id="InputNombreN2" placeholder="Nombre">
              <label for="InputApellidoN2">Apellido</label>
              <input type="apellido" class="form-control" id="InputApellidoN2" placeholder="Apellido">
            </div>
            <h2> Edad </h2>
            <div class="nino2">
              <select class="form-control input-lg">
                <option >3</option>
                <option >4</option>
                <option >5</option>
                <option >6</option>
                <option >7</option>
                <option >8</option>
                <option >9</option>
                <option >10</option>
                <option >11</option>
              </select>
              
              
              <h3>Género </h3>
              <select class="form-control input-lg">
                <option >Femenino</option>
                <option >Masculino</option>
              </select>
            </div>
          </div>
        </div>
      </div>
      <div class="section6R">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>
            <a href="/" class="btn btn-default btn-lg btn-block">Cancelar</a>
          </div>
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
@stop
@section('scripts')
<!-- script needed to only call some code in this page -->
<script>
  RegistroInit();
</script>
@stop
