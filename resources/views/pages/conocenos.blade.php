@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->
  <div class="semiblanco">
    <div class="container">
      <div class="fondo1">
          
        <div class="conocenos">
          <h1> {{ trans('conocenos.Quienes') }}</h1> 
         
         <!--Jessica--> 
       <div class="row">      
        <div class="col-sm-6 col-md-4">
           <div class="thumbnails"> 
             <div class="img-thumbnail img-circle">  
               <img src="images/ComiteSMLJessica.jpg" alt="Jessica" class="img-circle"/>
                </div>
                
                <div class="caption">
               <h2>{{ trans('conocenos.nomJessica') }} </h2>
             <h3>{{ trans('conocenos.comiteJessica') }}</h3>
             {!! trans('conocenos.Jessica') !!}
            <button type="button" class="btn btn-leer btn-sm">Leer más</button>
              {!! trans('conocenos.Jessica1') !!}      
           </div> <!--End Caption--->
         </div> <!--End thumbnails-->
        </div> <!--End Col--->
             
           <!--Tania-->    
        <div class="col-sm-6 col-md-4">
          <div class="thumbnails"> 
            <div class="img-thumbnail img-circle">  
               <img src="images/ComiteSMLTania.jpg" alt="Tania" class="img-circle"/>
                </div>
                 <div class="caption">
                 <h2>{{ trans('conocenos.nomTania') }}</h2>
                 <h3>{{ trans('conocenos.comiteTania') }}</h3>
               {!! trans('conocenos.Tania') !!}
               <button type="button" class="btn btn-leer btn-sm">Leer más</button>
              {!! trans('conocenos.Tania1') !!}
             </div> <!--End Caption--->
            </div> <!--End thumbnails-->
            </div> <!--End Col--->
           <div class="clearfix hidden-md hidden-lg"></div>    
           <!--Velia-->    
            <div class="col-sm-6 col-md-4">
              <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLVelia.jpg" alt="Velia" class="img-circle"/>
                  </div>
                 <div class="caption">
                <h2>{{ trans('conocenos.nomVelia') }}</h2>
               <h3>{{ trans('conocenos.comiteVelia') }}</h3>
                 {!! trans('conocenos.Velia') !!}
               <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                  {!! trans('conocenos.Velia1') !!} 
               </div> <!--End Caption--->
             </div> <!--End thumbnails-->
            </div> <!--End Col--->  
         <div class="clearfix hidden-xs hidden-sm"></div> 
 
         <!---Ximena-->       
           <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLXimena.jpg" alt="Ximena" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomXimena') }}</h2>
                   <h3>{{ trans('conocenos.comiteXimena') }}</h3>
                   {!! trans('conocenos.Ximena') !!} 
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                  {!! trans('conocenos.Ximena1') !!} 
                 </div> <!--End Caption--->
                </div> <!--End thumbnails-->
               </div> <!--End Col--->
 
          <!---Perla-->       
             <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLPerla.jpg" alt="Perla" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomPerla') }}</h2>
                   <h3>{{ trans('conocenos.comitePerla') }}</h3>
                     {!! trans('conocenos.Perla') !!}
                    <button type="button" class="btn btn-leer btn-sm">Leer más</button>  
                    {!! trans('conocenos.Perla1') !!}  
                  </div> <!--End Caption--->
                 </div> <!--End thumbnails-->
               </div> <!--End Col--->
           
       <div class="clearfix hidden-md hidden-lg"></div>       
        
            <!---Amarilis-->       
             <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLAmarilis.jpg" alt="Amarilis" class="img-circle"/>
                  </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomAmarilis') }}</h2>
                    <h3>{{ trans('conocenos.comiteAmarilis') }}</h3>
                       {!! trans('conocenos.Amarilis') !!} 
                  <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Amarilis1') !!} 
               </div> <!--End Caption--->
               </div> <!--End thumbnails-->
               </div> <!--End Col---> 

         <div class="clearfix hidden-xs hidden-sm"></div> 
        <div class="clearfix hidden-md hidden-lg"></div> 
          
         <!---Angelica-->       
             <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLAngie.jpg" alt="Angie" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomAngie') }}</h2>
                   <h3>{{ trans('conocenos.comiteAngie') }}</h3>
                    {!! trans('conocenos.Angie') !!} 
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                   {!! trans('conocenos.Angie1') !!} 
                 </div> <!--End Caption--->
                </div> <!--End thumbnails-->
               </div> <!--End Col--->   
      
       <!--Leonor-->       
             <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
               <img src="images/ComiteSMLLeonor.jpg" alt="Leonor" class="img-circle"/>
              </div>
                
               <div class="caption">
                 <h2>Leonor </h2>
                   <h3>{{ trans('conocenos.comiteleonor') }}</h3>
                    {!! trans('conocenos.leonor') !!}
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.leonor1') !!}
                </div> <!--End Caption--->
               </div> <!--End thumbnails-->
             </div> <!--End Col--->
          
          <!---Sixta-->       
             <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
               <img src="images/ComiteSMLSixta.jpeg" alt="logocirculo" class="img-circle"/>
              </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomSixta') }} </h2>
                   <h3>{{ trans('conocenos.comiteSixta') }}</h3>
                    {!! trans('conocenos.Sixta') !!}
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Sixta1') !!}
                </div> <!--End Caption--->
               </div> <!--End thumbnails-->
             </div> <!--End Col--->
            
         <div class="clearfix hidden-xs hidden-sm"></div> 
        
        
         <!---Veronica-->       
            <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLVeronica.jpg" alt="veronica" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomVeronica') }}</h2>
                  <h3>{{ trans('conocenos.comiteVeronica') }}</h3> 
                    {!! trans('conocenos.Vernonica') !!}
                  <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Vernonica1') !!}
                 </div> <!--End Caption--->
               </div> <!--End thumbnails-->
              </div> <!--End Col--->
              
             
                  <!---Puerto-->       
            <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLPuerto.jpg" alt="puerto" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomPuerto') }}</h2>
                    <h3>{{ trans('conocenos.comitePuerto') }}</h3>
                   {!! trans('conocenos.Puerto') !!} 
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Puerto1') !!} 
                   
               </div> <!--End Caption--->
              </div> <!--End thumbnails-->
             </div> <!--End Col--->
             
              
                 <!---Elia Gómez-->       
            <div class="col-sm-6 col-md-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomElia') }}</h2>
                    <h3>{{ trans('conocenos.comiteElia') }}</h3>
                   {!! trans('conocenos.Elia') !!} 
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Elia1') !!} 
                   
               </div> <!--End Caption--->
              </div> <!--End thumbnails-->
             </div> <!--End Col--->              
             </div><!--End ROW-->
           
    
         <h1>Nuestros Aliados</h1> 
       
         
         <!---Guillermo Carvajal-->       
             <div class="row">      
              <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/AliadoSMLGuillermo.jpg" alt="Guillermo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>{{ trans('conocenos.nomGuillermo') }}</h2>
                    <h3>{{ trans('conocenos.comiteGuillermo') }}</h3> 
                   {!! trans('conocenos.Guillermo') !!}
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Guillermo1') !!}
                  </div> <!--End Caption--->
                  </div> <!--End thumbnails-->
                </div> <!--End Col--->
             </div><!--End ROW-->  
          
       </div> <!--End Conocenos-->        
    </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco---> 
@stop