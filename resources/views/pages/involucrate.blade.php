@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->

<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
      
      <div class="involucrate">
        <div class="row">
         <div class="col-md-12">
          <h1>{{ trans('involucrate.Ayudar') }}</h1>
          </div>
        </div><!--End ROw---> 
       
       <div class="row">
        <div class="col-md-10">
         {!! trans('involucrate.proverbioChino') !!}
         
          </div>
        </div><!--End ROw---> 
       
       <div class="row">
        <div class="col-md-12">
        {!! trans('involucrate.Invitacion') !!}
       
        
       <div class="involucrate1">
       <div class="row">
       <div class="col-md-6">
       {!! trans('involucrate.QuieresApoyarnos') !!}
       
        </div>
       <div class="col-md-6">
         {!! trans('involucrate.Email') !!}
         </div>
        </div>
       </div>
      </div>
      </div><!--End ROw---> 
     </div><!--End Involucrate-->
      
   </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco--->        
@stop