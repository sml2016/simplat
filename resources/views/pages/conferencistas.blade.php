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
                
           <!--Primer Conferencista-->  
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/conferencistasMaru.jpg"  class="img-responsive" alt="maru" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="conferencistas1a">
                        <div class="collapsable" collapsed-height="280">
                            {!! trans('conferencistas.Maru') !!} 
                        </div>
                        <div id="leermas" class="" style="display:block;">
                            <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conferencistas.leerMas') }}</button>
                            <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conferencistas.leerMenos') }}</button>
                        </div>
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
                        <div class="collapsable" collapsed-height="280">
                            {!! trans('conferencistas.MariaS') !!} 
                        </div>
                        <div id="leermas" class="" style="display:block;">
                            <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conferencistas.leerMas') }}</button>
                            <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conferencistas.leerMenos') }}</button>
                        </div>
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
                       <div class="collapsable" collapsed-height="280">
                          {!! trans('conferencistas.Lizeth') !!} 
                        
                        </div>
                        <div id="leermas" class="" style="display:block;">
                            <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conferencistas.leerMas') }}</button>
                            <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conferencistas.leerMenos') }}</button>
                        </div>
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
                       <div class="collapsable" collapsed-height="280">  
                       {!! trans('conferencistas.Elodia') !!} 
                       </div>
                        <div id="leermas" class="" style="display:block;">
                            <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conferencistas.leerMas') }}</button>
                            <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conferencistas.leerMenos') }}</button>
                        </div>
                    </div>
                </div>
            </div> <!--End ROW -->
                
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-4 col-md-offset-1  col-lg-4 col-lg-offset-1">
                    <div class="conferencistas1">
                        <img  src="images/panelistaAna.jpg"  class="img-responsive" alt="ana" width="250" height="200"/>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-7 col-md-6 col-lg-6">
                    <div class="panelistas1a">
                      <div class="collapsable" collapsed-height="280">    
                      {!! trans('conferencistas.Ana') !!} 
                      </div>
                        <div id="leermas" class="" style="display:block;">
                            <button type="button" class="btn btn-leer btn-sm readMoreButton">{{ trans('conferencistas.leerMas') }}</button>
                            <button type="button" class="btn btn-leer btn-sm readLessButton" style="display:none">{{ trans('conferencistas.leerMenos') }}</button>
                        </div>
                    </div>
                </div>
            </div> <!--End ROW -->
        </div> <!--End conferencistas-->
    </div><!--END fondo1-->
  </div><!--Container-->
</div> <!--<END Semiblanco-->
@stop

