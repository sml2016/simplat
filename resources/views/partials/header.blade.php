<div class="container-fluid">
  <div class="navbar navbar-default navbar-margin-bottom">
    <div class="container">
        <!--Logo-->
        <div class="row">
            <div class="col-xs-6  col-sm-4  col-md-4  col-lg-8 col-xl-5">
                <div class="corazon">
                    <img src="/images/logoSMLmd.png" class="img-responsive" style="width:100% height:auto" ;/>
                </div>
            </div>
            <!-- End corazon -->
        </div>
        <!-- end row -->
        <!--Social Media md-Lg -->
        <div class="navbar">
            <div class="social1 pull-right visible-xs">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/es') }}"><i class="fa fa-lg fa-es"></i></a></li>
                    <li><a href="{{ url('/en') }}"><i class="fa fa-lg fa-en"></i></a></li>
                </ul>
            </div>
            <!--Social Media xs -->
            <div class="social pull-right hidden-xs">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/es') }}"><i class="fa fa-lg fa-es"></i></a></li>
                    <li><a href="{{ url('/en') }}"><i class="fa fa-lg fa-en"></i></a></li>
                    <li><a href="https://www.facebook.com/latinasymposium/"><i class="fa fa-lg fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/SimposioLatinas"><i class="fa fa-lg fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/simposiomujereslatinas/"><i class="fa fa-lg fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
        <!--end navbar-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
        <!--Menu Principal 1 -->
        <div class="collapse navbar-collapse navbar-right">
            <div class="menu1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}"><span class="{{ set_active('/') }}">{{ trans('header.Inicio') }}</span></a></li>
                    <li><a href="{{ url('/conferencistas') }}"><span class="{{ set_active('conferencistas') }}">{{ trans('header.Conferencistas') }}</span></a></li>
                    <li><a href="{{ url('/registro') }}"><span class="{{ set_active('registro') }}">{{ trans('header.Registro') }}</span></a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <span class="{{ set_active('patrocinanos').' '.set_active('patrocinadores') }}">{{ trans('header.Patrocina') }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-left">
                            <li><a href="{{ url('/patrocinanos') }}">Patrocínanos</a></li>
                            <li><a href="{{ url('/patrocinadores') }}">Nuestros Patrocinadores</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/involucrate') }}">Involúcrate</a></li>
                    <li class="visible-xs"><a href="{{ url('/noticias') }}">Noticias</a></li>
                    <li class="visible-xs"><a href="{{ url('/conocenos') }}">Conócenos</a> </li>
                    <li class="visible-xs"><a href="{{ url('/contacto') }}"><span class="active1">Contacto</a></li>
                </ul>
            </div>
            <!--End menu1 -->
            <!--Menu Principal 2 -->
            <div class="menu2 hidden-xs">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/noticias') }}"><span class="{{ set_active('noticias', 'active1') }}">Noticias</span></a></li>
                        <li><a href="{{ url('/conocenos') }}"><span class="{{ set_active('conocenos', 'active1') }}">Conócenos</span></a></li>
                        <li><a href="{{ url('/contacto') }}"><span class="active1">Contacto</a></li>
                    </ul>
                </div>
            </div> <!--End menu2 -->
        </div>
    </div> <!-- container -->
  </div> <!-- navbar -->
</div>
