@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->

<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
      
      
        <div class="testimonio">
          <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                   <h1>{{ trans('testimonios.Titulo') }}</h1>
                </div>
            </div><!--END ROW-->
           
         
           <div class="testimonio1">  
            <div class="row">
              <div class="col-sm-10 col-md-6">
                 <div class="bubble">
                {!! trans('testimonios.Dicen') !!}
                  </div>
                 <h2>{{ trans('testimonios.nombreXochi') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
               </div>
            
            
              <div class="col-sm-10 col-md-6">
                <div class="bubble">
                 {!! trans('testimonios.Dicen1') !!}
                </div>
                <h2>{{ trans('testimonios.nombreJueza') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div>
            </div><!--END ROW-->
           
            
            <div class="row">
             <div class="col-sm-10 col-md-6">
               <div class="bubble">
                 {!! trans('testimonios.Dicen2') !!}
                </div>
                <h2>{{ trans('testimonios.nombreMaribel') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div>
              
                 <div class="col-sm-10 col-md-6">
                <div class="bubble">
                 {!! trans('testimonios.Dicen3') !!}
                </div>
                <h2>{{ trans('testimonios.nombreMarcela') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div> 
            </div><!--END ROW-->
          </div>
         </div><!--End testimonio-->
       
    </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco--->
@stop
