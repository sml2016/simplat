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
                                    <p class="pricing-title">{{ trans('patrocinanos.Patrocinadores3') }}</p>
                                    <p class="pricing-rate"><sup>$</sup> 500 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">{{ trans('patrocinanos.Donar') }}</a>
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
                                    <p class="pricing-title">{{ trans('patrocinanos.Patrocinadores4') }}</p>
                                    <p class="pricing-rate"><sup>$</sup> 250 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">{{ trans('patrocinanos.Donar') }}</a>
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
                                    <p class="pricing-title">{{ trans('patrocinanos.Patrocinadores5') }}</p>
                                    <p class="pricing-rate"><sup>$</sup> 150 </p>
                                    <a href="https://nscef.ejoinme.org/latina" class="button-donar">{{ trans('patrocinanos.Donar') }}</a>
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
        {!! trans('patrocinanos.Impuestos') !!}
     </div> 
    </div> <!--END ROW---> 
   </div><!--Impuestos-->
   
  <div class="donaciones">
    <div class="row">
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1"> 
        <div class="donaciones1a">  
           {!! trans('patrocinanos.comoDonar') !!}
           </div>
          </div><!--END Donaciones1a-->
      
      <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-1 col-lg-4 col-lg-offset-1"> 
       <div class="donaciones1b"> 
          {!! trans('patrocinanos.hacerDonaciones') !!}
       </div>
      </div>
    </div><!--END ROW-->
   </div> <!--END Donaciones-->
 
 </div><!--END donacion-->
  
  </div><!---END fondo1--->
 </div> <!--Container-->
</div><!--End semiblanco-->
@stop
