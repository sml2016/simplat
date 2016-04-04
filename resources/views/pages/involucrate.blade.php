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
        <p>Te invitamos a que empoderes a una mujer latina con tu ayuda. Forma parte del grupo de personas 
        que quieren hacer un cambio en su comunidad. Participa como voluntario en la realización de 
        nuestro simposio. <span class="color"> ¡Involúcrate!</p>
        
       <div class="involucrate1">
       <div class="row">
       <div class="col-md-6">
        <h1>¿Quieres apoyarnos pero no sabes en qué? Ingresa a nuestra página en Genius, solo tienes que hacer
        <a href="https://nscef.ejoinme.org/MyPages/LatinaSymposiumEnglish/tabid/741216/Default.aspx">clic aquí</a></h1> 
        </div>
       <div class="col-md-6">
        <h2>Ahí podrás encontrar las diferentes actividades en las que puedes participar. O si lo prefieres, comunícate con 
        Angie al correo electrónico <br><span class="color1">simposiomujereslatinas.gente@gmail.com</span></br></h2>
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