@extends('layouts.master')
@section('content')
<div class="naranjaR"></div>
<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
      
      <div class="noticias">
       <div class="news20161">
        {!! trans('noticias.newsMaru') !!}  
            
      
      <div class="row">
       <div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">    
        <figure class="figure">
          <img  class="img-responsive" src="/images/NewsMaru.jpeg" alt="Maru Villalpando">
         <figcaption class="figure-caption"> {{ trans('noticias.grafico') }}  </figcaption>
        </figure>
       </div> <!-- END Col -->
       
      <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
      <article>
       <div class="collapsable" collapsed-height="280">    
         {!! trans('noticias.newsMaru1') !!}  
       
      </div>
        <div id="leermas" class="" style="display:block;">
           <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('noticias.leerMas') }}</button>
         <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('noticias.leerMenos') }}</button>
        </div>
      </article>  
      </div>
      </div><!-- END ROw --> 
      
     
      {!! trans('noticias.newsReinventandonos') !!}  
      <div class="row">
       <div class="col-xs-12  col-sm-5 col-md-4 col-lg-4">    
        <figure class="figure">
          <img  class="img-responsive" src="/images/NewsSimposio.jpg"   alt="Maru Villalpando">
         <figcaption class="figure-caption">{{ trans('noticias.grafico1') }} </figcaption>
        </figure>
       </div> <!-- END Col -->
     
     <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
      <article>
       <div class="collapsable" collapsed-height="280">    
        {!! trans('noticias.newsReinventandonos1') !!}
       
        </div>
        <div id="leermas" class="" style="display:block;">
           <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('noticias.leerMas') }}</button>
         <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('noticias.leerMenos') }}</button>
        </div>
       </article>  
       </div>
      </div><!-- END ROw --> 
       </div><!-- END News20161 --> 
      </div><!-- END Noticias -->  
     </div><!-- END fondo1 -->
  </div><!-- END Container -->
</div> <!-- END Semiblanco --> 
@stop