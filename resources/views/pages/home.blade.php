@extends('layouts.master')

@section('content')
<!-- Imagen principal -->
<div class="naranja">
    <div class="container">
      <div class="cover">
         <img class="img-responsive" src="/images/LatinasPrueba_1170x430.png"  style="width:100% height:auto";/>
      </div>  
    </div> <!--Contanier-->
</div> <!-- end naranaja -->

<div class="semiblanco">
    <div class="container">
        <div class="row row-of-blocks">
            <div class="col-xs-12  col-sm-4  col-md-4  "><a href="{{ url('/registro') }}" class="button">{{ trans('home.BotonRegistro') }}</a></div>
            <div class="col-xs-12  col-sm-4  col-md-4 "><a href="{{ url('/patrocinanos') }}" class="button">{{ trans('home.BotonPatrocina') }}</a></div>
            <div class="col-xs-12  col-sm-4  col-md-4" ><a href="{{ url('/involucrate') }}" class="button">{{ trans('home.BotonInvolucrate') }}</a></div>
        </div>  
    </div>   <!--Contanier-->

    <!-- Container & Sidebar -->

    <div class="container">
        <div class="fondo">

        <!--Section-->
   
        <div class="section">
         <div class="row">
           <div class="col-md-7">
            <div class="embed-responsive embed-responsive-16by9">  
             <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/159162565" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>
           </div> <!--End col-md-7 Section-->
          
           <div class="col-md-5">
             <div class="sidebar">
                 {!! trans('home.TeEsperamos') !!}
              </div> <!--End sidebar -->
            </div>  
           </div> <!-- End Row -->
         </div> <!-- End section-->
        
         <div class="sectionA">
            <div class="premio">
              <div class="row">
               <div class="col-md-7 text-center">
                   {!! trans('home.ElPremio') !!}
              </div>
              <div class="col-md-5">
             <div class="embed-responsive embed-responsive-16by9"> 
            <iframe class="embed-responsive-item" src="http://player.theplatform.com/p/7wvmTC/MSNBCEmbeddedOffSite?guid=n_witt_3immi_141122_390595"  scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            </div>     
           </div>
          </div><!--End row premio--->
         </div> <!--End Premio--->
        </div> <!---End SectionA-->
        
        <div class="sectionB">
         <div class="row">
          <div class="col-md-7">
           {!! trans('home.Vision') !!}
         
            </div>
           
            <div class="col-md-5">
             <div class="sidebarB thumbnail">    
              <h1>¡Síguenos en Twitter!</h1>   
              <a class="twitter-timeline" href="https://twitter.com/SimposioLatinas" data-widget-id="702376127755587588">Tweets by @SimposioLatinas</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
             </div>
            </div>
           </div> <!--End row sectionB-->
          </div> <!---End sectionB--->
          
          <div class="sectionC">
           <div class="row">
           <div class="col-md-7">
           <h1>¿Cómo llegar al Simposio?</h1> 
          <p>North Seattle College está al lado de I-5, justo 4 millas al norte del centro de Seattle. Si está llegando al Colegio desde los puentes 520 o I-90, deberá viajar hacia el norte por I-5 para llegar al campus.</br></br>
          </p>
         
          <h2>Si vienes del Norte</h2>  
          <p>1. Tome la salida #173 (Salida Northgate)
           2. Doble a la derecha en Northgate Way N.
           3.Doble a la izquierda en la avenida Meridian N (se vuelve College Way N)
           4. El colegio está sobre la izquierda.
           5. Estaciónese en la zona de Biblioteca.</p>
        
          <h2>Si vienes del Sur</h2>
          <p>1. Tome la salida  #173 (Salida Northgate)
            2. Doble a la derecha en  la avenida 1st NE.
            3. Doble a la derecha de nuevo en la calle 92st NE.
            4. Doble a la derecha en College Way N.
            5. El colegio está sobre  la derecha.
            6. Estaciónese en la zona de Biblioteca, en la calle 97th y College Way N.</p>
         
          <h2>Si viene de Highway 99 (Aurora)</h2>
          <p>Doble a la izquierda o  la derecha (dependiendo de si está conduciendo al norte o al sur) en la calle 117th. Doble a la derecha en Meridian St. N. Conduzca hacia el sur hasta 97th St y College Way N. Podrá estacionarse sobre la izquierda.</p>

          <p><span class="active">*La Avenida Meridian se vuelve  College Way N. entre la calle 100th y la 90th.</span></p>
         </div>
       
         <div class="col-md-5">
          <div class="sidebarC">  
           <h1>North Seattle College</br><span class="edificio">9600 College Way N Seattle, WA 98103</span></h1>
    
           <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10740.873382142783!2d-122.3322916!3d47.6995983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef595859431902b6!2sNorth+Seattle+College!5e0!3m2!1sen!2sus!4v1456280677788"></iframe>   
            </div>
           
            <h2>¿Dónde me estaciono?</h2>
           <p>El estacionamiento <span class="gratis">será gratuito</span>.</p>
          <p>Nos estacionaremos en el área de Biblioteca, cerca del Centro de Educación y Cuidado de Niños. La entrada está ubicada en la calle 97th.</p>
         </div> <!--End sidebar C -->
        </div>  
       </div> <!-- End Row --> 
      </div> <!--End SectionC -->
      
      <div class="sectionD">
       <div class="row">
        <div class="col-xs-5 col-xs-offset-1 col-sm-5 col-sm-offset-1">  
         <img class="img-responsive" src="images/patrocinadores/NSC.png"/>  
         </div>
          <div class="col-xs-5 col-sm-5 col-sm-offset-1">   
           <img class="img-responsive" src="images/patrocinadores/latinofoundation.png"/>   
           </div> 
          </div> <!---End Row D---> 
         </div><!--End sectionD-->        
        </div> <!--Fondo-->
    </div>  <!--Contanier-->
</div> <!--Semibalnco -->
@stop

