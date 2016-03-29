@extends('layouts.master')

@section('stylesheets')
<link rel="stylesheet" href="/css/lightbox.css" type="text/css">
@stop

@section('content')
  <div class="naranjaR"></div> <!-- naranjaR -->
     <div class="semiblanco">
       <div class="container">
         <div class="fondo1">
          
             <div class="galeria">
               <h1>{{ trans('galeria2014.Titulo2') }}</h1>
               
               <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML1.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML1-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
                   
             
                <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML2.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML2-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
               
              <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML03.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML03-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
             
               <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML04.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML04-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
            </div> <!--End Row1 -->
            
            <div class="row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML5.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML5-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
                   
                <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML6.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML6-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
               
             <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML7.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML7-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
             
             <div class="col-sm-6 col-md-3 col-lg-3">
                 <a href="/images/galeria2014/2014SML8.jpg"  data-title="{{ trans('galeria2014.Titulo2') }}" data-lightbox="Galeria2015">
                  <img src="/images/galeria2014/2014SML8-thumb.jpg"    class="img-thumbnail"/>
                 </a>
                </div> <!---End col---> 
            </div> <!--End Row2 -->
        </div> <!---End galeria--->
    </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco---> 
@stop

@section('scripts')
<script src="/js/lightbox.min.js"></script>
@stop