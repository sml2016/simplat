@extends('layouts.master')
@section('content')
<div class="naranjaR"> </div> <!-- naranjaR -->
<div class="container">
  <div class="fondo1">
    <div class="registrada">
      <h1>"Felicidades ya eres parte del 3er Simposio de Mujeres Latinas"</h1>
      <h2>{!! trans('aceptado.mensajeFecha') !!}</h2>
      <p><span class="cancelar">*</span>Es importante qué en caso de no asistir, por favor envíanos un correo electrónico a <span class="cancelar"> simposiomujereslatinas@gmail.com</span></br>
    avisando que cancelas tu lugar para poder darle la oportunidad a otra mujer de ser parte del simposio.</p>
    </div>  
  </div> <!-- Fondo1 -->
</div>
@stop
