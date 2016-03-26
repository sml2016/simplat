@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->

<div class="semiblanco">
  <div class="container">
    <div class="fondo1b">
   
    <div class="patrocinanos"> 
      <div class="row">     
       <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          {!! trans('patrocinanos.Introduccion') !!}
        </div>
       </div> <!--End Row-->
   </div> <!--End Patrocinanos--> 
   
   
  <!--Tabla de patrocinadores -->
  
        <section id="pricing-table">
            <div class="container">
                <div class="row">
                    <div class="pricing">
                        <div class="col-xs-11 col-md-2 col-md-offset-1 col-lg-2 col-lg-offset-1">
                            <div class="pricing-table">
                                <div class="pricing-header">
                          
                                    <p class="pricing-title">{{ trans('patrocinanos.Patrocinadores1') }}</p>
                                    <p class="pricing-rate"><sup>$</sup> 1,500 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">{{ trans('patrocinanos.Donar') }}</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                          {!! trans('patrocinanos.Beneficios1') !!}
                                        
                                    </ul>
                                </div><!--End pricing-list-->
                            </div><!--End pricing-table-->
                        </div><!--END col-->

                        <div class="col-xs-11   col-md-2  col-lg-2">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">{{ trans('patrocinanos.Patrocinadores2') }}</p>
                                    <p class="pricing-rate"><sup>$</sup> 1,000 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">{{ trans('patrocinanos.Donar') }}</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        {!! trans('patrocinanos.Beneficios2') !!}
                                    </ul>
                                </div>
                            </div>
                        </div><!--END col-->
                       
                        <div class="col-xs-11  col-md-2 col-lg-2">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">PATROCINADOR ORO</p>
                                    <p class="pricing-rate"><sup>$</sup> 500 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">Dona aquí</a>
                                </div>

                                <div class="pricing-list">
                                    <ul> 
                                        <li><i class="fa fa-heart-o"></i>Su nombre en el programa del evento. Su logo en la página interna de nuestro sitio de Internet. </li>
                                        <li><i class="fa fa-heart-o"></i>Menciones del patrocinador durante el evento.</li>
                                        <li><i class="fa fa-heart"></i>Espacio para promoción en el programa del evento.</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--END col-->
                        
                         <div class="col-xs-11 col-md-2 col-lg-2">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">PATROCINADOR  PLATA</p>
                                    <p class="pricing-rate"><sup>$</sup> 250 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">Dona aquí</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="fa fa-heart-o"></i>Su nombre en el programa del evento. Su logo en la página interna de nuestro sitio de Internet.</li>
                                        <li><i class="fa fa-heart"></i>Menciones del patrocinador durante el evento.</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--END col-->

                        <div class="col-xs-11 col-md-2 col-lg-2">
                            <div class="pricing-table">
                                <div class="pricing-header">
                                    <p class="pricing-title">PATROCINADOR  BRONCE</p>
                                    <p class="pricing-rate"><sup>$</sup> 150 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">Dona aquí</a>
                                </div>

                                <div class="pricing-list">
                                    <ul>
                                        <li><i class="fa fa-heart"></i>Su nombre en el programa del evento. Su logo en la página interna de nuestro sitio de Internet. </li>
                                    </ul>
                                </div>
                            </div><!--END pricing-table-->
                        </div><!--END col-->
                    </div><!--END Pricing-->
                </div><!--END Row-->
             </div><!--END container-->
        </section>


 <div class="donacion">
  
    <div class="impuestos">
      <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">    
        <p class="text-justify"><b>Importante:</b>  Tu aporte te permitirá la reducción de impuestos porque estarás donando a una organización sin fines de lucro, al fondo de educación del NSC. 
       <span><b>Impuestos federales</b> ID# 41-2178833</span>. Todos los logos de los patrocinantes estarán incluidos en la agenda del evento.</p> 
     </div> 
    </div> <!--END ROW---> 
   </div><!--Impuestos-->
   
  <div class="donaciones">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1"> 
        <div class="donaciones1a">  
         <h1>Tu donación es importante</h1>
           <h2>Para apoyar este evento que se dedica a mejorar las habilidades de las mujeres latinas en Seattle, solo tienes que hacer <a href="https://nscef.ejoinme.org/latina">clic aquí.</a></h2>
          <p>Coloca la cantidad de dinero que quieres donar, rellena los datos de información personal y bancaria, para hacer el Simposio de Mujeres Latinas posible. Todas las donaciones hechas al North Seattle College te permitirán la reducción en el pago de impuestos, pues estás donando a una organización sin fines de lucro.</p>
          <p>Es importante que al finalizar la donación imprimas el recibo que te dará la página web, el cual servirá para tu declaración de impuestos.</p>
        </div>
      </div><!--END Donaciones1a-->
      
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1"> 
       <div class="donaciones1b"> 
         <h1>¿Quieres apoyar pero no tienes dinero para donaciones?</h1>     
         <p>El Simposio de Mujeres Latinas es un evento gratuito para la comunidad y queremos que se mantenga así.</p>
         <p> También puedes hacer donaciones de tarjetas de regalo o certificados para compras para tiendas y restaurantes, entre otros, pues serán rifados entre las 225 participantes. Para más información sobre cómo puedes ayudarnos, contáctanos por email: <span>simposiomujereslatinas@gmail.com</span></p>
       </div>
      </div>
    </div><!--END ROW-->
   </div> <!--END Donaciones-->
 
 </div><!--END donacion-->
  
  </div><!---END fondo1--->
 </div> <!--Container-->
</div><!--End semiblanco-->
@stop
