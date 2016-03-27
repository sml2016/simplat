@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->
   <div class="container">
      <div class="fondo1"> 
          
        <div class="conocenos">
          <h1> {{ trans('conocenos.Quienes') }}</h1> 
            
         <div class="row">
         
         <!--Jessica-->       
        <div class="col-sm-4">
           <div class="thumbnails"> 
             <div class="img-thumbnail img-circle">  
               <img src="images/ComiteSMLJessica.jpg" alt="logocirculo" class="img-circle"/>
                </div>
                
                <div class="caption">
               <h2> Jessica Cabrera</h2>
             <h3>{{ trans('conocenos.comiteJessica') }}</h3>
             {!! trans('conocenos.Jessica') !!}
            <button type="button" class="btn btn-leer btn-sm">Leer más</button>
              {!! trans('conocenos.Jessica1') !!}      
           </div> <!--End Caption--->
         </div> <!--End thumbnails-->
        </div> <!--End Col--->
             
           <!--Tania-->    
        <div class="col-sm-4">
          <div class="thumbnails"> 
            <div class="img-thumbnail img-circle">  
               <img src="images/ComiteSMLTania.jpg" alt="logocirculo" class="img-circle"/>
                </div>
                 <div class="caption">
                 <h2>Tania Hino</h2>
                 <h3>Comité de Finanzas</h3>
               {!! trans('conocenos.Tania') !!}
               <button type="button" class="btn btn-leer btn-sm">Leer más</button>
              {!! trans('conocenos.Tania1') !!}
             </div> <!--End Caption--->
            </div> <!--End thumbnails-->
            </div> <!--End Col--->
               
           <!--Velia-->    
            <div class="col-sm-4">
              <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLVelia.jpg" alt="logocirculo" class="img-circle"/>
                  </div>
                 <div class="caption">
                <h2>Velia Lara</h2>
               <h3>Comité de Banquete-Decoración</h3>
                 {!! trans('conocenos.Velia') !!}
              <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                  {!! trans('conocenos.Velia1') !!} 
               </div> <!--End Caption--->
               </div> <!--End thumbnails-->
               </div> <!--End Col--->
              </div> <!--End row-->    
        
         <div class="row">
          <!---Perla-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLPerla.jpg" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Perla Mendoza</h2>
                   <h3>Comité de Publicidad y Web</h3>
                     {!! trans('conocenos.Perla') !!}
                    <button type="button" class="btn btn-leer btn-sm">Leer más</button>  
                    {!! trans('conocenos.Perla1') !!}  
                  </div> <!--End Caption--->
                 </div> <!--End thumbnails-->
               </div> <!--End Col--->
               
               
         <!---Ximena-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLXimena.jpg" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Ximena Grollmus</h2>
                   <h3>Comité de Banquete</h3>
                   {!! trans('conocenos.Ximena') !!} 
                <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                  {!! trans('conocenos.Ximena1') !!} 
                 </div> <!--End Caption--->
                </div> <!--End thumbnails-->
               </div> <!--End Col--->
        
 
        <!---Sixta-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLSixta.jpeg" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Sixta Morel </h2>
                   <h3>Comité de Publicidad</h3>
                    {!! trans('conocenos.Sixta') !!}
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Sixta1') !!}
                   
                </div> <!--End Caption--->
               </div> <!--End thumbnails-->
             </div> <!--End Col--->
           </div> <!--End row-->  
           
           
           <div class="row">
          <!---Amarilis-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                  </div>
                
               <div class="caption">
                 <h2>Amarilis Aranguren</h2>
                   <h3>Comité de Contenido-Registro</h3>
                   <p>Hola fjakljfklajflaskdfkjlkjlkjljkjk;j;jj  </p>
                  <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                  <p>Hola fjakljfklajflaskdfkjlkjlkjljkjk;j;jj  </p>
               </div> <!--End Caption--->
               </div> <!--End thumbnails-->
               </div> <!--End Col--->
               
               
         <!---Angelica-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/ComiteSMLAngie.jpg" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Angélica</h2>
                   <h3>Comité de Voluntariado</h3>
                    <p>Hola fjakljfklajflaskdfkjlkjlkjljkjk;j;jj  </p>
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                  <p>Hola fjakljfklajflaskdfkjlkjlkjljkjk;j;jj  </p>
                 </div> <!--End Caption--->
                </div> <!--End thumbnails-->
               </div> <!--End Col--->
           
          
            <!---Elia Gómez-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Elia Gómez</h2>
                   <h3>Comité de Finanzas</h3>
                   {!! trans('conocenos.Elia') !!} 
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Elia1') !!} 
                   
               </div> <!--End Caption--->
              </div> <!--End thumbnails-->
             </div> <!--End Col--->
            </div> <!--End row-->  
         
          
           <div class="row">
         <!---Veronica-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Veronica</h2>
                   <h3>Comité de Recuerdos</h3>
                    <p>Hola fjakljfklajflaskdfkjlkjlkjljkjk;j;jj  </p>
                  <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                  <p>Hola fjakljfklajflaskdfkjlkjlkjljkjk;j;jj  </p>
               </div> <!--End Caption--->
               </div> <!--End thumbnails-->
               </div> <!--End Col--->
           
    
             <h1>Nuestros Aliados</h1> 
    
         <div class="row">
         <!---Guillermo Carvajal-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Guillermo Carvajal</h2>
                   <h3>Comité de Finanzas</h3>
                   {!! trans('conocenos.Guillermo') !!}
                   <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                    {!! trans('conocenos.Guillermo1') !!}
               </div> <!--End Caption--->
               </div> <!--End thumbnails-->
               </div> <!--End Col--->
    
         </div> <!--End Conocenos-->       

          
      </div> <!-- Fondo1 -->
     </div> <!-- container -->
       



@stop