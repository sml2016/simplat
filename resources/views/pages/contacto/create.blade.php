@extends('layouts.master')
@section('content')
<div class="naranjaR"> </div>
  
   <div class="semiblanco">
    <div class="container">
      <div class="fondo1">
        <div class="contacto1">
          <h1>{{ trans('contacto.Contactenos') }}</h1>
           <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">     
              {!! trans('contacto.TelEmail') !!}
           </div>     
          </div>  
            <form type="POST" role="form" method="POST" action="{{ url('/contacto') }}">
                {!! csrf_field() !!}
                <div class="form-group-lg">
                    <div class="row">
                        <div class="col-xs-8 col-xs-offset-2 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                            @if ($errors->any())
                              @foreach ($errors->all() as $error)
                                  <div class="alert alert-danger" role="alert">{{ $error }}</div>
                              @endforeach
                            @endif
                            <label for="InputNombreC">{{ trans('contacto.InputNombre') }}</label>
                            <input type="text" class="form-control" id="InputNombreC" placeholder="{{ trans('contacto.InputNombre') }}" name="name" value="{{Request::old('name')}}" required>
                            <label for="InputEmailC">{{ trans('contacto.InputEmail') }}</label>
                            <input type="email" class="form-control" id="InputEmailC" placeholder="{{ trans('contacto.InputEmail') }}" name="email" value="{{Request::old('email')}}" required> 
                            <label for="InputAsunto">{{ trans('contacto.Asunto') }}</label>
                            <input type="telefono" class="form-control" id="InputAsunto" placeholder="{{ trans('contacto.Asunto') }}" name="title" value="{{Request::old('title')}}" required>
                            <label> {{ trans('contacto.Mensaje') }} </label>
                            <textarea class="form-control" rows="10" name="message" required>{{Request::old('message')}}</textarea>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">{{ trans('contacto.Enviar') }}</button>
                        </div>
                    </div> <!-- row -->
                </div> 
            </form>
        </div>
     </div> <!-- Fondo1 -->
  </div> <!-- container -->
</div><!--End semiblanco-->
@stop