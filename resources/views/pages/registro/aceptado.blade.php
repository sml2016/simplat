@extends('layouts.master')
@section('content')
<div class="naranjaR"> </div> <!-- naranjaR -->
<div class="container">
  <div class="fondo1">
    <div class="registrada">
      <h1>"Felicidades ya eres parte del 3er Simposio de Mujeres Latinas"</h1>
      <h2>{!! trans('aceptado.mensajeFecha') !!}</h2>
      @if ($hayGuarderia == true)
      <h3>Recibiras un correo electrónico con más información sobre el servicio de guardería</h3>
      @endif
      <p>En caso de no asistir cancela tu lugar enviando un correo electrónico a <span class="cancelar"> simposiomujereslatinas@gmail.com</span>
      o comunicarse al número teléfonico <span class="cancelar">206-934-3749</span> Ext.<span class="cancelar">2336.</span></p>
   
    </div>  
  </div> <!-- Fondo1 -->
</div>
@stop
