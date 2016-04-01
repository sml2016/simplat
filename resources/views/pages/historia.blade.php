@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->

<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
      
         <div class="historia">
          
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>{{ trans('historia.Nuestra') }}</h1>
                </div>
            </div> <!--End ROW subt. Historia -->
   <div class="conainer">  
     <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">  
          {!! trans('historia.laHistoria') !!}
        </div>
       </div><!--End Row-->   
      </div> 
      <div><!--END Historia-->     
    </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco---> 
@stop
