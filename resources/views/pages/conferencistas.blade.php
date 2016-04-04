@extends('layouts.master')
@section('content')
<div class="naranjaR"></div> <!-- naranjaR -->

<div class="semiblanco">
  <div class="container">
    <div class="fondo1">
        <div class="conferencistas">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>{{ trans('conferencistas.Conferencistas') }} </h1>
                </div>
            </div> <!--End ROW subt. conferencistas -->
                
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencistasMaru.jpg"  class="img-responsive" alt="maru" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="conferencistas1a">
                        <div class="more-less" collapsed-height="256">
                            <div class="more-block">
                                {!! trans('conferencistas.Maru') !!} 
                            </div>
                        </div>
                        <span class="dotdotdot">...</span>
                        <div id="leermas" class="" style="display:block;">
                            <button type="button" class="btn btn-leer btn-sm readMoreButton">Leer más</button>
                            <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">Leer menos</button>
                        </div>
<!--                        <h2>Maribel Meza Tomara <span class="bio"> Biografía</span></h2>

                        <h3>Maestra en la Universidad de Washington</h3>
                        <p class="readMore" showlength="611">English writer Virginia Woolf was raised in a remarkable household. Her father, Sir Leslie Stephen, was an historian and author, and also one of the most prominent figures in the golden age of mountaineering. Woolf’s mother, Julia Prinsep Stephen (née Jackson), had been born in India and later served as a model for several Pre-Raphaelite painters. She was also a nurse and wrote a book on the profession. Woolf had three full siblings and four half-siblings; both of her parents had been married and widowed before marrying each other. The eight children lived under one roof at 22 Hyde Park Gate, Kensington.
                            <br>
                            Two of Woolf’s brothers had been educated at Cambridge, but all the girls were taught at home and utilized the splendid confines of the family’s lush Victorian library. Moreover, Woolf’s parents were extremely well connected, both socially and artistically. Her father was a friend to William Thackeray and George Henry Lewes, as well as many other noted thinkers. Her mother’s aunt was the famous 19th century photographer Julia Margaret Cameron. For these reasons and more, Virginia Woolf was ideally situated to appreciate and experiment with the art of writing.
                            <br>
                            From the time of her birth, on January 25, 1882, until 1895, Woolf spent her summers in St. Ives, a beach town at the very southwestern tip of England. The Stephens’ summer home, Talland House, which is still standing today, looks out at the dramatic Porthminster Bay and has a view of the Godrevy lighthouse, which inspired her writing. In her later memoirs, Woolf recalled St. Ives with a great fondness. In fact, she incorporated scenes from those early summers into her modernist novel, To the Lighthouse (1927).
                        </p>
                    -->
                    
                   <!--Primer Conferencista-->  
                    </div>
                </div>
            </div> <!--End ROW  1er conferencistas-->
           
         <!--Segunda Conferencista-->      
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencistasCote.jpg"  class="img-responsive" alt="maria" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="conferencistas1a">
                        <div class="more-less" collapsed-height="256">
                            <div class="more-block">
                                {!! trans('conferencistas.MariaS') !!} 
                            </div>
                        </div>
                        <span class="dotdotdot">...</span>
                        <div id="leermas" class="" style="display:block;">
                            <button type="button" class="btn btn-leer btn-sm readMoreButton">Leer más</button>
                            <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">Leer menos</button>
                        </div>
<!--                        <h2>Maribel Meza Tomara <span class="bio"> Biografía</span></h2>
                        <h3>Maestra en la Universidad de Washington</h3>
                        <p class="readMore" showlength="611">English writer Virginia Woolf was raised in a remarkable household. Her father, Sir Leslie Stephen, was an historian and author, and also one of the most prominent figures in the golden age of mountaineering. Woolf’s mother, Julia Prinsep Stephen (née Jackson), had been born in India and later served as a model for several Pre-Raphaelite painters. She was also a nurse and wrote a book on the profession. Woolf had three full siblings and four half-siblings; both of her parents had been married and widowed before marrying each other. The eight children lived under one roof at 22 Hyde Park Gate, Kensington.
                            Two of Woolf’s brothers had been educated at Cambridge, but all the girls were taught at home and utilized the splendid confines of the family’s lush Victorian library. Moreover, Woolf’s parents were extremely well connected, both socially and artistically. Her father was a friend to William Thackeray and George Henry Lewes, as well as many other noted thinkers. Her mother’s aunt was the famous 19th century photographer Julia Margaret Cameron. For these reasons and more, Virginia Woolf was ideally situated to appreciate and experiment with the art of writing.
                        From the time of her birth, on January 25, 1882, until 1895, Woolf spent her summers in St. Ives, a beach town at the very southwestern tip of England. The Stephens’ summer home, Talland House, which is still standing today, looks out at the dramatic Porthminster Bay and has a view of the Godrevy lighthouse, which inspired her writing. In her later memoirs, Woolf recalled St. Ives with a great fondness. In fact, she incorporated scenes from those early summers into her modernist novel, To the Lighthouse (1927).
                        </p>
                        <div id="leermas" class="visible-xs visible-sm hidden-md hidden-lg">
                            <button type="button" class="btn btn-leer btn-sm readMoreLessButton">Leer más</button>
                            <button type="button" class="btn btn-leer btn-sm readMoreLessButton" style="display:none">Leer menos</button>
                        </div>
-->
                    </div>
                </div>
            </div> <!--End ROW 2nd Conferencista-->
            
        <!--Tercera Conferencista-->    
             <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencistasLizeth.jpg"  class="img-responsive" alt="lizeth" width="250" height="200"/>
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
        </div> <!--End conferencistas-->

        <div class="panelistas">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1>{{ trans('conferencistas.Panelistas') }} </h1>
                </div>
            </div> <!--End ROW -->
                
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/ElodiaGlz.jpg"  class="img-responsive" alt="elodia" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="panelistas1a">
                       {!! trans('conferencistas.Elodia') !!} 
                          <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                          {!! trans('conferencistas.Elodia1') !!}  
                    </div>
                </div>
            </div> <!--End ROW -->
                
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencista1.jpg"  class="img-responsive" alt="ana" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="panelistas1a">
                      {!! trans('conferencistas.Ana') !!} 
                       <button type="button" class="btn btn-leer btn-sm">Leer más</button>
                      {!! trans('conferencistas.Ana1') !!} 
                    </div>
                </div>
            </div> <!--End ROW -->
        </div> <!--End conferencistas-->
    </div><!--END fondo1-->
  </div><!--Container-->
</div> <!--<END Semiblanco-->
@stop

