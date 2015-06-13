<html lang="en">
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Transportadora</title>
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/roboto.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/material-fullpalette.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ripples.min.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
    /* Move down content because we have a fixed navbar that is 50px tall */
    body {
      padding-top: 50px;
    }


    /*
     * Global add-ons
     */

    .sub-header {
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
    }

    /*
     * Top navigation
     * Hide default border to remove 1px line.
     */
    .navbar-fixed-top {
      border: 0;
    }

    /*
     * Sidebar
     */

    /* Hide for mobile, show later */
    .sidebar {
      display: none;
    }
    @media (min-width: 768px) {
      .sidebar {
        position: fixed;
        top: 51px;
        bottom: 0;
        left: 0;
        z-index: 1000;
        display: block;
        padding: 20px;
        overflow-x: hidden;
        overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
        background-color: #f5f5f5;
        border-right: 1px solid #eee;
      }
    }

    /* Sidebar navigation */
    .nav-sidebar {
      margin-right: -21px; /* 20px padding + 1px border */
      margin-bottom: 20px;
      margin-left: -20px;
    }
    .nav-sidebar > li{
      color: #686868;
      font-size: 1.3em;
      padding-right: 20px;
      padding-left: 20px;
    }
    .nav-sidebar > li > i {
      position: relative;
      top: 4px;
      margin-right: 0.3em;
    }

    .nav-sidebar > .submenu{
      font-size: 1.1em;
      padding-left: 4em;
    }

    .nav-sidebar > .submenu > li {
      color: #333;
      text-decoration: none;
    }

    .nav-sidebar > .submenu > li > a {
      color: #337ab7;
    }

    .nav-sidebar > .active > a,
    .nav-sidebar > .active > a:hover,
    .nav-sidebar > .active > a:focus {
      color: #fff;
      background-color: #428bca;
    }

    .views-control{
      margin-top: 2em; 
    }

    .material-button{
      float: right;
      top: -2em;
      right: 1em;
    }

    /*
     * Main content
     */

    .main {
      padding: 20px;
    }
    @media (min-width: 768px) {
      .main {
        padding-right: 40px;
        padding-left: 40px;
      }
    }
    .main .page-header {
      margin-top: 0;
    }


    /*
     * Placeholder dashboard ideas
     */

    .placeholders {
      margin-bottom: 30px;
      text-align: center;
    }
    .placeholders h4 {
      margin-bottom: 0;
    }
    .placeholder {
      margin-bottom: 20px;
    }
    .placeholder img {
      display: inline-block;
      border-radius: 50%;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Transportadora CL</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ url('/home') }}">Dashboard</a></li>
            <li><a href="#">Perfil</a></li>
            <li><a href="{{ url('/auth/logout') }}">Salir</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><i class="mdi-image-timer-auto"></i>Personal</li>
              <ul class="submenu">
                <li><a href="{{ url('/empresa') }}">Empresa</a></li>
                <li><a href="{{ url('/empleado') }}">Empleado</a></li>
                <li><a href="#">Nomina</a></li>
              </ul>
            <li><i class="mdi-device-now-widgets"></i>Administración</li>
            <ul class="submenu">
              <li><a href="{{ url('/proveedor') }}">Proveedores</a></li>
              <li><a href="{{ url('/cliente') }}">Clientes</a></li>
              <li><a href="{{ url('/destinatario') }}">Destinatarios</a></li>
              <li><a href="#">Cotizaciones</a></li>
              <li><a href="#">Contrarecibos</a></li>
              <li><a href="#">Facturas</a></li>
            </ul>
            <li><i class="mdi-action-settings"></i>Mantenimiento</li>
            <ul class="submenu">
              <li><a href="#">Rutas</a></li>
              <li><a href="{{ url('/unidad') }}">Unidades</a></li>
              <li><a href="{{ url('/remolque') }}">Remolques</a></li>
            </ul>
            <li><i class="mdi-av-equalizer"></i>Graficas</li>
          </ul>
        </div>

        @yield('content')
  

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/ripples.min.js') }}"></script>
    <script>
      $.material.init();
    </script>

</body>
</html>