@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->

<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
        <div class="conferencistas">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Conferencistas</h1>
                </div>
            </div> <!--End ROW subt. conferencistas -->
                
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencistasMaru.jpeg"  class="img-responsive" alt="maria" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="conferencistas1a">
                    
                   <!---Primer Conferencista--->  
                         {!! trans('conferencistas.Maru') !!}   
                        
                        <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                         {!! trans('conferencistas.Maru1') !!}   
                    </div>
                </div>
            </div> <!--End ROW  1er conferencistas-->
           
         <!---Segunda Conferencista--->      
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencistasCote.jpg"  class="img-responsive" alt="maria" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="conferencistas1a">
                          {!! trans('conferencistas.MariaS') !!}   
                       
                        <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                           {!! trans('conferencistas.MariaS1') !!}   
                    </div>
                </div>
            </div> <!--End ROW 2nd Conferencista-->
            
        <!---Tercera Conferencista--->    
             <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencistasLizeth.jpg"  class="img-responsive" alt="maria" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="conferencistas1a">
                          {!! trans('conferencistas.Lizeth') !!} 
                        
                        <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                          {!! trans('conferencistas.Lizeth1') !!} 
                    </div>
                </div>
            </div> <!--End ROW 3er. conferencista -->
        </div> <!----End conferencistas--->

        <div class="panelistas">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>Panelistas</h1>
                </div>
            </div> <!--End ROW -->
                
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/ElodiaGlz.jpg"  class="img-responsive" alt="maria" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="panelistas1a">
                        <h2>Elodia González <span class="bio"> Biografía</span></h2>
                        <h3>Psicologa</h3>
                        <p>English writer Virginia Woolf was raised in a remarkable household. Her father, Sir Leslie Stephen, was an historian and author, and also .</p>
                       
                                <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                        
                        <p>Two of Woolf’s brothers had been educated at Cambridge, but all the girls were taught at home and utilized the splendid confines of the family’s lush Victorian library. Moreover, Woolf’s parents were extremely well connected, both socially and artistically. Her father was a friend to William Thackeray and George Henry Lewes, as well as many other noted thinkers. Her mother’s aunt was the famous 19th century photographer Julia Margaret Cameron. For these reasons and more, Virginia Woolf was ideally situated to appreciate and 
                        </p>
                    </div>
                </div>
            </div> <!--End ROW -->
                
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencista1.jpg"  class="img-responsive" alt="maria" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="panelistas1a">
                        <h2>Maribel Meza Tomara <span class="bio"> Biografía</span></h2>
                        <h3>Maestra en la Universidad de Washington</h3>
                        <p>English writer Virginia Woolf was raised in a remarkable household. arents had been married and widowed before marrying each other. The eight children lived under one roof at 22 Hyde Park Gate, Kensington.</p>
                                <button type="button" class="btn btn-leer btn-sm">Leer más</button>
 
                    <p>Two of Woolf’s brothers had been educated at Cambridge, but all the girls were taught at home and utilized the splendid confines of the family’s lush Victorian library. Moreover, Woolf’s parents were extremely well connected, both socially and artistically. Her father was a friend to William Thackeray and George Henry Lewes, as
                    </p>
                    </div>
                </div>
            </div> <!--End ROW -->
        </div> <!----End conferencistas--->
    </div><!---END fondo1--->
  </div><!--Container-->
</div> <!--<END Semiblanco--->
@stop
