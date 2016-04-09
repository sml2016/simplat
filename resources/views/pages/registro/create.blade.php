@extends('layouts.master')
@section('content')
<div class="naranjaR"></div>

<div class="semiblanco">
  <div class="container">
   <div class="fondo1">
    <form type="POST" role="form" method="POST" action="{{ url('/registro') }}">

      {!! csrf_field() !!}

      <div class="section1R">
        @if ($attendeeCount < $settings->number_of_attendees)
          <h1>{{ trans('registro.titulo') }}</h1>
        @else
          <h1>{{ trans('registro.tituloListaDeEspera') }}</h1>
        @endif
        <div class="form-group-lg">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              @if ($errors->any())
                  @foreach ($errors->all() as $error)
                      <div class="alert alert-danger" role="alert">{{ $error }}</div>
                  @endforeach
              @endif
              <label for="InputNombre">{{ trans('registro.nombre') }}</label>
              <input type="text" class="form-control" id="InputNombre" placeholder="{{ trans('registro.nombre') }}" name="name" value="{{Request::old('name')}}" required>
              <label for="InputApellido">{{ trans('registro.apellido') }}</label>
              <input type="apellido" class="form-control" id="InputApellido" placeholder="{{ trans('registro.apellido') }}" name="lastname" value="{{Request::old('lastname')}}" required>
              <label for="InputTel">{{ trans('registro.telefono') }}</label>
              <input type="telefono" class="form-control" id="InputTel" placeholder="Teléfono" name="phonenumber" value="{{Request::old('phonenumber')}}" required>
              <label for="InputEmail">{{ trans('registro.email') }}</label>
              <input type="Correo Eléctronico" class="form-control" id="InputEmail" placeholder="Correo Electrónico" name="email" value="{{Request::old('email')}}" required>
            </div>
          </div>
        </div>
      </div>
      @if ($daycareCount >= $settings->daycare_limit)
        <h3>{{ trans('registro.servicioGuarderialleno') }}</h3>
      @else
        <div class="section2R">
          <h1>{{ trans('registro.servicioGuarderia') }}</h1>
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
              <div class="radio">
                <label>
                  <input type="radio" name="needsdaycare" id="opciones_1" value="si" {{ Request::old('needsdaycare') == 'si' ? 'checked="checked"' : '' }}>
                {{ trans('registro.Si') }}</label>
                <label>
                  <input type="radio" name="needsdaycare" id="opciones_2" value="no" {{ Request::old('needsdaycare') == 'no' ? 'checked="checked"' : '' }}>
              {{ trans('registro.No') }}</label>
              </div>
            </div>
          </div>
        </div>
        @if ($settings->daycare_limit - $daycareCount > 1)
          <div class="section3R" style="display:none">
            <h1>{{ trans('registro.cuantosNinos') }}</h1>  
            <h2>{{ trans('registro.maximoNinos') }}</h2>
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
        @else
          <div class="section3R" style="display:none">
            <h1>{{ trans('registro.UnLugarGuarderia') }}</h1>  
            <h2>{{ trans('registro.edaddenino') }}</h2>
            <select id="daycarenumber" style="display:none" name="daycarenumber">
              <option value="1" selected>{{ trans('registro.Uno') }}</option>
            </select>
          </div>
        @endif
        <div class="section4R" style="display:none">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              <h1>{{ trans('registro.NinoNumero') }}</h1>
              <div class="form-group-lg">
                <label for="InputNombreN1">{{ trans('registro.Nombre1') }}</label>
                <input type="text" class="form-control" name="child1name" id="InputNombreN1" placeholder="Nombre" value="{{Request::old('child1name')}}">
                <label for="InputApellidoN1">{{ trans('registro.Apellido1') }}</label>
                <input type="apellido" class="form-control" name="child1lastname" id="InputApellidoN1" placeholder="Apellido" value="{{Request::old('child1lastname')}}">
              </div>
              <h2>{{ trans('registro.Edad1') }}</h2>
              <div class="nino1">
                <select name="child1age" id="child1Age" class="form-control input-lg">
                    @for($age = $settings->daycare_min_age ; $age <= $settings->daycare_max_age ; $age++)
                      <option value="{{$age}}" {{ Request::old('child1age') == $age ? 'selected' : '' }}>{{$age}}</option>
                    @endfor
                </select>
                
                <h3>{{ trans('registro.Género1') }}</h3>
                <select name="child1sex" class="form-control input-lg">
                  <option value="0" {{ Request::old('child1sex') == '0' ? 'selected' : '' }}>{{ trans('registro.Masculino1') }}</option>
                  <option value="1" {{ Request::old('child1sex') == '1' ? 'selected' : '' }}>{{ trans('registro.Femenino1') }}</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="section5R" style="display:none">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
              <h1>{{ trans('registro.Niña2') }}</h1>
              <div class="form-group-lg">
                <label for="InputNombreN2">{{ trans('registro.Nombre2') }}</label>
                <input type="text" class="form-control" name="child2name" id="InputNombreN2" placeholder="Nombre" value="{{Request::old('child2name')}}">
                <label for="InputApellidoN2">{{ trans('registro.Apellido2') }}</label>
                <input type="apellido" class="form-control" name="child2lastname" id="InputApellidoN2" placeholder="Apellido" value="{{Request::old('child2lastname')}}" >
              </div>
              <h2> Edad </h2>
              <div class="nino2">
                <select name="child2age" id="child2Age" class="form-control input-lg">
                    @for($age = $settings->daycare_min_age ; $age <= $settings->daycare_max_age ; $age++)
                      <option value="{{$age}}" {{ Request::old('child2age') == $age ? 'selected' : '' }}>{{$age}}</option>
                    @endfor
                </select>
                <h3>Género </h3>
                <select name="child2sex" class="form-control input-lg">
                  <option value="0" {{ Request::old('child2sex') == '0' ? 'selected' : '' }}>Masculino</option>
                  <option value="1" {{ Request::old('child2sex') == '1' ? 'selected' : '' }}>Femenino</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      @endif
      <div class="section6R">
        <div class="row">
          <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>
            <a href="/" class="btn btn-default btn-lg btn-block">Cancelar</a>
          </div>
        </div>
      </div>
    </form>
  </div>
 </div>
</div>
@stop
@section('scripts')
<!-- script needed to only call some code in this page -->
<script>
  RegistroInit();
</script>
@stop
