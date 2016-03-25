@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->
   <div class="container">
      <div class="fondo1"> 
          
        <div class="conocenos">
          <h1>Quiénes Somos</h1> 
            
         <div class="row">
         
         <!--Jessica-->       
        <div class="col-sm-4">
           <div class="thumbnails"> 
             <div class="img-thumbnail img-circle">  
               <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                </div>
                
                <div class="caption">
               <h2> Jessica Cabrera</h2>
             <h3>Comité de Registro y Canastas</h3>
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
               <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
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
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                  </div>
                 <div class="caption">
                <h2>Velia Lara</h2>
               <h3>Comité de Comida-Decoración</h3>
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
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Perla Mendoza</h2>
                   <h3>Comité de Publicidad y Web</h3>
                   <p> Retomar ese suspiro de esperanza y compartirlo con las demás mujeres que buscan crecer en este país , es lo que me sigue motivando a ser parte de este simposio. 
                       Como mujer creo que tenemos el compromiso de formar a nuestras familias con amor, respeto y educación. Es importante reconocer nuestro roll, educarnos para así poder poder motivar a nuestras familias de que tenemos que evolucionar, enseñarles a soñar, a crear metas y sobre todo apoyar a quién va a nuestro lado.</p>  
                        <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                     <p>Cuando uno migra sin importar bajo que circunstancia todos probamos ese sabor a vacío, ese sentir de dejar lo que se era, y aun en contra de nuestros ideales o perspectivas la señora vida nos va moldeando. Crecemos consciente o inconscientemente, y ese cambio, esa evolución siempre será un regalo. </p>
                     <p>Soy Perla, hija, madre, esposa y migrante. Viajo con la vida, y a veces me pierdo en ella. Llegue al estado de Washington con dos maletas, las cuales las tuve que dejar y con ello algunas de mis limitaciones y miedos. Seguí mis sueños  y migre a Dublín. 
                         Después de experimentar ser madre y estudiante termine mi maestría y la vida me regreso a Seattle. Hoy estoy aquí, ayudando en este evento para crecer junto con todas las mujeres que llegan al simposio con miedos,  anhelos y sueños.
                   </p>
               </div> <!--End Caption--->
               </div> <!--End thumbnails-->
               </div> <!--End Col--->
               
               
         <!---Ximena-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
                </div>
                
               <div class="caption">
                 <h2>Ximena Grollmus</h2>
                   <h3>Comité de Comida</h3>
                   <p>
                  Mi llegue a este país cargada de muchos sueños, ilusiones y en busca de nuevas oportunidades y desafíos. </br></br>como profesora de español para varias Escuelas Primarias de diferentes distritos. 
                </p>
                <button type="button" class="btn btn-leer btn-sm">Leer más</button>
               <p> Esta vida es un constante aprendizaje y todas y cada una de nosotras podemos lograr nuestros objetivos y sueños siempre y cuando nos apoyemos y luchemos juntas como mujeres fuertes que somos, y esperamos que nuestras historias sirvan a la vez de inspiración para muchas mujeres que buscan un medio de apoyo para el beneficio  Las esperamos con muchas ansias!
               </p>
               </div> <!--End Caption--->
               </div> <!--End thumbnails-->
               </div> <!--End Col--->
        
 
        <!---Sixta-->       
             <div class="col-sm-4">
               <div class="thumbnails"> 
                <div class="img-thumbnail img-circle">  
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
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
                   <h3>Comité de Contenido</h3>
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
                 <img src="images/logocirculo.png" alt="logocirculo" class="img-circle"/>
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
                   <h3>Comité de Canastas</h3>
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
                 <img src="Imagenes/logocirculo.png" alt="logocirculo" class="img-circle"/>
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