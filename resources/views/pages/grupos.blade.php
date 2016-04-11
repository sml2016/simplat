@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->

<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
    
    
     <div class="seguimiento">
   
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
       <h1>{{ trans('grupos.titulo') }}</h1>
      </div>
      </div>
      
       
       <div class="row hidden-xs">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <img src="/images/grupo/grupoTodas.JPG" class="img center-block" alt="Yuri"/>
       </div>
      </div>
      
       <div class="row visible-xs">
        <div class="col-sm-12 col-md-12 col-lg-12">
        <img src="/images/grupo/grupoTodas1.JPG" class="img center-block" alt="Yuri"/>
       </div>
      </div>
      
        
       <div class="row">
        <div class="col-sm-12 col-md-12">
         <div class="seguimientoescrito">
           {!! trans('grupos.yuri') !!}

         
         <h2>{{ trans('grupos.yuri1') }}</h2>
         <h3>{{ trans('grupos.yurifecha') }}</h3>
         </div>
        </div> 
       </div><!-- ENd ROw-->
       
      
        <div class="row">
        <div class="col-sm-12 col-md-12">
        <div class="seguimientoescrito">
          {!! trans('grupos.maria') !!}

        <h2>{{ trans('grupos.maria1') }}</h2>
        <h3>{{ trans('grupos.mariafecha') }}</h3> 
        </div>
        </div> 
       </div><!-- ENd ROw-->
   
     </div><!-- END Grupo -->    
      
   </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco--->        
@stop

