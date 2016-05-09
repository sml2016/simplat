@extends('layouts.master')
@section('content')
<div class="naranjaR"></div>
<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
      <div class="conocenos">
        <h1> {{ trans('conocenos.Quienes') }}</h1>

        <!-- Row Mujeres-->
        <div class="row">
            
            
         <!--Tania-->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLTania.jpg" alt="Tania" class="img-circle"/>
              </div>
              <div class="caption">
                <h2>{{ trans('conocenos.nomTania') }}</h2>
                <h3>{{ trans('conocenos.comiteTania') }}</h3>
              <div class="collapsable" collapsed-height="280">
                {!! trans('conocenos.Tania') !!}
              </div>
                <div id="leermas" class="" style="display:block;">
                 <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                 </div>  
              </div><!-- End Caption -->
            </div><!-- End thumbnails -->
          </div><!-- End Col -->
          
          <!--Jessica--> 
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails">
              <div class="img-thumbnail img-circle">
                <img src="images/ComiteSMLJessica.jpg" alt="Jessica" class="img-circle"/>
              </div>

              <div class="caption">
                <h2>{{ trans('conocenos.nomJessica') }}</h2>
                <h3>{{ trans('conocenos.comiteJessica') }}</h3>
              <div class="collapsable" collapsed-height="280">
                   {!! trans('conocenos.Jessica') !!}
              </div>
                <div id="leermas" class="" style="display:block;">
                 <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                 </div>
              </div><!-- End Caption -->
            </div><!-- End thumbnails -->
          </div><!-- End Col -->

          <div class="clearfix hidden-md hidden-lg"></div>  

          <!--Velia-->    
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails">
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLVelia.jpg" alt="Velia" class="img-circle"/>
              </div>
              <div class="caption">
                <h2>{{ trans('conocenos.nomVelia') }}</h2>
                <h3>{{ trans('conocenos.comiteVelia') }}</h3>
                <div class="collapsable" collapsed-height="280">
                {!! trans('conocenos.Velia') !!}
               </div>
                <div id="leermas" class="" style="display:block;">
                 <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                 </div>  
              </div><!-- End Caption -->
            </div><!-- End thumbnails -->
          </div><!-- End Col -->
           <div class="clearfix hidden-xs hidden-sm"></div> 
           
          <!---Ximena-->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLXimena.jpg" alt="Ximena" class="img-circle"/>
              </div>

              <div class="caption">
                <h2>{{ trans('conocenos.nomXimena') }}</h2>
                <h3>{{ trans('conocenos.comiteXimena') }}</h3>
                 <div class="collapsable" collapsed-height="280">
                {!! trans('conocenos.Ximena') !!} 
                </div>
                <div id="leermas" class="" style="display:block;">
                 <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                 </div>  
              </div><!-- End Caption -->
            </div><!-- End thumbnails -->
          </div><!-- End Col -->
          <div class="clearfix hidden-md hidden-lg"></div> 
           
          <!---Perla-->    
 <!--         <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLPerla.jpg" alt="Perla" class="img-circle"/>
              </div>
              <div class="caption">
                <h2>{{ trans('conocenos.nomPerla') }}</h2>
                <h3>{{ trans('conocenos.comitePerla') }}</h3>
               <div class="collapsable" collapsed-height="280">
                {!! trans('conocenos.Perla') !!}
                </div>
                <div id="leermas" class="" style="display:block;">
                 <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                 </div>  
              </div><!-- End Caption -->
         <!--   </div><!-- End thumbnails -->
     <!--     </div><!-- End Col -->
 
   <!-- Amarilis -->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLAmarilis.jpg" alt="Amarilis" class="img-circle"/>
              </div>

              <div class="caption">
                <h2>{{ trans('conocenos.nomAmarilis') }}</h2>
                <h3>{{ trans('conocenos.comiteAmarilis') }}</h3>
                 <div class="collapsable" collapsed-height="280">
                {!! trans('conocenos.Amarilis') !!} 
                 </div>
                <div id="leermas" class="" style="display:block;">
                 <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                 </div>  
              </div> <!-- End Caption -->
            </div> <!-- End thumbnails -->
          </div> <!-- End Col -->
 
 
 
 
          <!-- Sixta-->  
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLSixta.jpg" alt="logocirculo" class="img-circle"/>
              </div>

              <div class="caption">
               <h2>{{ trans('conocenos.nomSixta') }} </h2>
                <h3>{{ trans('conocenos.comiteSixta') }}</h3>
                 <div class="collapsable" collapsed-height="280">
                 {!! trans('conocenos.Sixta') !!}
                 </div>
                 <div id="leermas" class="" style="display:block;">
                 <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                </div>  
             </div><!-- End Caption -->
            </div><!--End thumbnails -->
          </div><!--End Col -->
          
          <div class="clearfix"></div> 

      <!---Angelica-->
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLAngie.jpg" alt="Angie" class="img-circle"/>
              </div>
              <div class="caption">
                <h2>{{ trans('conocenos.nomAngie') }}</h2>
                <h3>{{ trans('conocenos.comiteAngie') }}</h3>
                <div class="collapsable" collapsed-height="280">  
                 {!! trans('conocenos.Angie') !!} 
                </div>
                <div id="leermas" class="" style="display:block;">
                  <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                  <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                </div> 
              </div><!-- End Caption -->
            </div><!-- End thumbnails -->
          </div><!-- End Col -->
  
       <!---Veronica--> 
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/ComiteSMLVeronica.jpg" alt="veronica" class="img-circle"/>
              </div>
              <div class="caption">
                <h2>{{ trans('conocenos.nomVeronica') }}</h2>
                <h3>{{ trans('conocenos.comiteVeronica') }}</h3> 
               <div class="collapsable" collapsed-height="280">   
                {!! trans('conocenos.Veronica') !!}
                </div>
                  <div id="leermas" class="" style="display:block;">
                  <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                </div> 
              </div><!-- End Caption -->
            </div><!-- End thumbnails -->
          </div><!-- End Col -->   
 
          <div class="clearfix hidden-md hidden-lg"></div> 

      <!-- Leonor -->       
          <div class="col-xs-12 col-sm-6 col-md-4">
            <div class="thumbnails"> 
              <div class="img-thumbnail img-circle">  
                <img src="images/comiteSMLLeonor.jpg" alt="Leonor" class="img-circle"/>
              </div>
              <div class="caption">
                <h2>Leonor </h2>
                <h3>{{ trans('conocenos.comiteLeonor') }}</h3>
                <div class="collapsable" collapsed-height="280">   
                 {!! trans('conocenos.Leonor') !!}
                 </div>
                  <div id="leermas" class="" style="display:block;">
                  <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                </div> 
              </div> <!--End Caption -->
            </div> <!--End thumbnails -->
          </div> <!--End Col -->
        </div><!-- End ROW--> 
               
          <div class="clearfix hidden-xs hidden-sm"></div>   
          
       

        <div class="aliados">
          <h1>{{ trans('conocenos.Aliados') }}</h1> 
           </div><!-- END Aliados -->
          <!---Guillermo Carvajal-->       
          <div class="row">      
            <div class="col-sm-8 col-sm-offset-2  col-md-6 col-md-offset-3">
              <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                  <img src="images/AliadoSMLGuillermo.jpg" alt="Guillermo" class="img-circle"/>
                </div>
                <div class="caption">
                  <h2>{{ trans('conocenos.nomGuillermo') }}</h2>
                  <h3>{{ trans('conocenos.comiteGuillermo') }}</h3> 
                 <div class="collapsable" collapsed-height="280">   
                  {!! trans('conocenos.Guillermo') !!}
                   </div>
                  <div id="leermas" class="" style="display:block;">
                  <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conocenos.leerMas') }}</button>
                 <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conocenos.leerMenos') }}</button>
                </div> 
                </div><!-- END Caption -->
              </div><!-- END thumbnails -->
            </div><!-- END Col -->
          </div><!-- END ROW -->
      </div><!-- END Conocenos -->
    </div><!-- END fondo1 -->
  </div><!-- END Container -->
</div> <!-- END Semiblanco --> 
@stop
