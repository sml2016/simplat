@extends('layouts.master')
@section('content')
<div class="naranjaR"> </div> <!-- naranjaR -->
<div class="container">
  <div class="fondo1">
    <div class="registrada">
      <h1>{{ trans('aceptado.mensajeFelicidades') }}</h1>
      <h2>{!! trans('aceptado.mensajeFecha') !!}</h2>
      @if ($hayGuarderia == true)
      <h3>{{ trans('aceptado.mensajeServicioGuarderia') }}</h3>
      @endif
      <p>{!! trans('aceptado.mensajeCancelar') !!}</p>
   
    </div>  
  </div> <!-- Fondo1 -->
</div>
@stop
