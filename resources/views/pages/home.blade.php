@extends('layouts.master')

@section('content')
<!-- Slideshow Carrusel -->
<div class="naranja">
    <div class="container">
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data class="active" data-slide-to="0" data-target="#myCarousel"></li>
                <li data-slide-to="1"  data-target="#myCarousel"></li>
                <li data-slide-to="2" data-target="#myCarousel"></li>
                <li data-slide-to="3" data-target="#myCarousel"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner"> <!-- role="listbox-->

                <div class="item active">
                    <iframe src="https://player.vimeo.com/video/155624043" style="width:100%; height:100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div> <!-- end item-->

                <div class="item">
                    <img src="/images/SMLC2.png" class="img-responsive"  alt="Carrusel 2" style="width:100%; height:100%"></img>
                    <img class="visible-xs" src="/images/SMLC2m.png"></img>
                    <div class="carousel-caption">
                        <div class="donar">
                            <h4>Con Tu Apoyo </br>Creáremos </br> <span class="negro">Líderes</span></h4>
                            <a href="https://nscef.ejoinme.org/MyPages/ElSymposiodeLatinas/tabid/732850/Default.aspx" class="button1">Donación</a>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="/images/SMLC3.png" class="img-responsive" alt="Carrusel3" style="width:100%; height:100%"/>
                </div>

                <div class="item">
                    <img src="/images/SMLC4.png" class="img-responsive" alt="Carrusel4" style="width:100%; height:100%"/>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> <!--Contanier-->
</div> <!-- end naranaja -->

<div class="semiblanco">
    <div class="container">
        <div class="row row-of-blocks">
            <div class="col-xs-12  col-sm-4  col-md-4  "><a href="registro.html" class="button">Registro</a></div>
            <div class="col-xs-12  col-sm-4  col-md-4 "><a href="{{ url('/patrocinanos') }}" class="button">Patrocina</a></div>
            <div class="col-xs-12  col-sm-4  col-md-4" ><a href="involucrate.html" class="button">Involúcrate</a></div>
        </div>  
    </div>   <!--Contanier-->

    <!-- Container & Sidebar -->

    <div class="container">
        <div class="fondo">

            <div class="section1">
                <div class="row">
                   <div class="col-md-7">
                        <h1>¡El Tercer Simposio de Mujeres Latina</br> es un evento gratuito!</h1>
                        <h2>Se llevará acabo el <span class="fecha">sábado 21 de Mayo </span> del 2016.</br> A partir de las 10:30 a.m. hasta las 3:00 p.m.</br> En las instalaciones de North Seattle College.</h2>
                        <h3>¡Te esperamos!</h3>
                    </div>
                    <div class="col-md-5">
                        <div class="sidebar1"> 
                            <h1>¡Síguenos en Twitter!</h1>
                            <a class="twitter-timeline" href="https://twitter.com/SimposioLatinas" data-widget-id="702376127755587588">Tweets by @SimposioLatinas</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div> <!--End sidebar1 -->
                    </div>  
                </div> <!-- End Row -->
            </div> <!-- End section 1-->
            <div class="section2">
                <div class="row">
                    <div class="col-md-7">
                        <h1> Nuestra Visión</h1>
                        <p>El Simposio de Mujeres Latinas es nuestro punto de partida para dotar a la comunidad de herramientas que le permitan participar activamente sobre las decisiones y acciones que afectan sus vidas.</p>
                        <h2>¿Quiénes somos?</h2>
                        <p>Somos un grupo de mujeres que ofrece ayuda a la comunidad de mujeres latinas a través de un simposio.
                        Incluimos mesas de trabajo y conferencias, con información práctica y útil para comprender el efecto que ellas tienen en su entorno.
                        Nuestra meta es proveer a las mujeres latinas de las herramientas necesarias para tomar decisiones y ejercer el control en los distintos aspectos de su vida.</p>
                    </div>
                    <div class="col-md-5">
                        <div class="sidebar2">  
                            <h1>North Seattle College</br><span class="edificio">Edificio: College Center (CC)</span></h1>
                            <p>Primer Piso en <span class="room">'North Star Dinning Room'</span>.</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10740.873382142783!2d-122.3322916!3d47.6995983!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xef595859431902b6!2sNorth+Seattle+College!5e0!3m2!1sen!2sus!4v1456280677788"></iframe>   
                            </div>
                        </div> <!--End sidebar2 -->
                    </div>  
                </div> <!-- End Row --> 
            </div> <!--End Section2 -->
        </div> <!--Fondo-->
    </div>  <!--Contanier-->
</div> <!--Semibalnco -->
@stop

