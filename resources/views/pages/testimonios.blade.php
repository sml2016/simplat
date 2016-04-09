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
                 {!! trans('testimonios.diceJueza') !!}
                </div>
                <h2>{{ trans('testimonios.nombreJueza') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div>
            
            
              <div class="col-sm-10 col-md-6">
                <div class="bubble">
                 {!! trans('testimonios.diceLupita') !!}
                </div>
                <h2>{{ trans('testimonios.nombrelupita') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div>
            </div><!--END ROW-->
           
            
            <div class="row">
              <div class="col-sm-10 col-md-6">
                <div class="bubble">
                 {!! trans('testimonios.diceMaria') !!}
                </div>
                <h2>{{ trans('testimonios.nombreMaria') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div> 
            
              
                 <div class="col-sm-10 col-md-6">
                <div class="bubble">
                 {!! trans('testimonios.diceAle') !!}
                </div>
                <h2>{{ trans('testimonios.nombreAle') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div> 
            </div><!--END ROW-->
            
            <div class="row">
              <div class="col-sm-10 col-md-6">
                 <div class="bubble">
                {!! trans('testimonios.diceXochi') !!}
                  </div>
                 <h2>{{ trans('testimonios.nombreXochi') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
               </div>
               
               <div class="col-sm-10 col-md-6">
                <div class="bubble">
                 {!! trans('testimonios.diceMarcela') !!}
                </div>
                <h2>{{ trans('testimonios.nombreMarcela') }}</h2>
                <h3>{{ trans('testimonios.Fecha') }}</h3>
              </div> 
              
           </div>
          </div>
         </div><!--End testimonio-->
       
    </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco--->
@stop
