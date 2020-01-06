<!--
 =========================================================
 * Material Kit - v2.0.6
 =========================================================

 * Product Page: https://www.creative-tim.com/product/material-kit
 * Copyright 2019 Creative Tim (http://www.creative-tim.com)
   Licensed under MIT (https://github.com/creativetimofficial/material-kit/blob/master/LICENSE.md)


 =========================================================

 * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset("./assets/$theme/img/apple-icon.png")}}">
  <link rel="icon" type="image/png" href="{{asset("./assets/$theme/img/favicon.png")}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('titulo') | Laravel
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{asset("./assets/$theme/css/material-kit.css?v=2.0.6")}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset("./assets/$theme/demo/demo.css")}}" rel="stylesheet" />
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>  
</head>

<body class="index-page sidebar-collapse">
   <!--        info navbar -->
          <nav class="navbar navbar-expand-lg bg-info">
            <div class="container">
              <div class="navbar-translate">
                <a class="navbar-brand" href="{{route('admin.home')}}">ADMINISTRADOR</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">

                  @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('INICIAR SESION') }}</a>
                      </li>
                    @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTRARSE') }}</a>
                      </li>
                    @endif
                  @else
                    <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.alumnos.create') }}">{{ __('ALUMNOS') }}</a>
                    </li>
                    <li class="nav-item">
                          <a class="nav-link" href="{{ route('admin.docentes.create') }}">{{ __('DOCENTES') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                  @endguest                  
                </ul>
              </div>
            </div>
          </nav>
          <!--        end info navbar -->
 

  <div id="app" class="main main-raised" style="margin-top: 0px;">
    @yield('contenido')
  </div>
  
  <footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li>
            <a href="https://www.creative-tim.com">
              Creative Tim
            </a>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Blog
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Licenses
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, made with <i class="material-icons">favorite</i> by
        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
      </div>
    </div>
  </footer>
  <!--   Core JS Files   -->
  <script src="{{asset("./assets/$theme/js/core/jquery.min.js")}}" type="text/javascript"></script>
  <script src="{{asset("./assets/$theme/js/core/popper.min.js")}}" type="text/javascript"></script>
  <script src="{{asset("./assets/$theme/js/core/bootstrap-material-design.min.js")}}" type="text/javascript"></script>
  <script src="{{asset("./assets/$theme/js/plugins/moment.min.js")}}"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="{{asset("./assets/$theme/js/plugins/bootstrap-datetimepicker.js")}}" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset("./assets/$theme/js/plugins/nouislider.min.js")}}" type="text/javascript"></script>  
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset("./assets/$theme/js/material-kit.js?v=2.0.6")}}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }

  </script>
</body>

</html>
