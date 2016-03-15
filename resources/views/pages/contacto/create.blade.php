@extends('layouts.master')
@section('content')
<div class="naranjaR"> </div>
<div class="container">
    <div class="fondo1">
        <div class="contacto1">
            <h1>Contáctenos</h1>
            <h2>Teléfono: 206 - 934 - 3749
                <span class="ext">Ext. 2336</span></h2>
             <h2>Correo Electrónico:<span class="email"> simposiomujereslatinas@gmail.com</span> </h2>
                
            
            <form type="POST" role="form" method="POST" action="{{ url('/contacto') }}">
                {!! csrf_field() !!}
                <div class="form-group-lg">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            <label for="InputNombreC">Nombre</label>
                            <input type="text" class="form-control" id="InputNombreC" placeholder="Nombre" name="name" required>
                            <label for="InputEmailC">Correo Electrónico</label>
                            <input type="email" class="form-control" id="InputEmailC" placeholder="Correo Electrónico" name="email" required> 
                            <label for="InputAsunto">Asunto</label>
                            <input type="telefono" class="form-control" id="InputAsunto" placeholder="Asunto" name="title" required>
                            <label> Mensaje </label>
                            <textarea class="form-control" rows="10" name="body" required></textarea>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                        </div>
                    </div> <!-- row -->
                </div> 
            </form>
        </div>
    </div> <!-- Fondo1 -->
</div> <!-- container -->
@stop