<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<link rel="shortcut icon" href="../favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Clinica') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/modernizr.custom.js') }}" defer></script>
    <script src="{{ asset('js/classie.js')}}" defer></script>
    <script src="{{ asset('js/gnmenu.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/label.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
  
    
    
    <!--Calendar-->

    <!--CSS-->
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    
    <!--Script-->
    <script src="{{ asset('//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js') }}" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

  
    <!--Fin-->
		

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/component.css') }}" rel="stylesheet">
    <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link href="{{ asset('css/demo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/contenedores.css') }}" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo asset('css/tablas.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/formularios.css')?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/titulos.css')?>" type="text/css">
 
    

    
</head>


<body>
       
        <!--SIDEBAR-->
        <div class="container">
            
            <ul id="gn-menu" class="gn-menu-main">         
                  
            <li class="gn-trigger">                    
				<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li class="gn-search-item">
									<input placeholder="Search" type="search" class="gn-search">
									<a class="gn-icon gn-icon-search"><span>Search</span></a>
                                    </li>
                                        <li>
                                            <a href="{{url('Mascotas')}}" class="gn-icon gn-icon-download">Mascotas</a>
                                                </li>
                                                    <li>
                                                          <a href="{{url('clientes')}}" class="gn-icon gn-icon-download">Clientes</a>
                                                        </li>
                                                        <li><a href="{{url('events')}}" class="gn-icon gn-icon-cog">Calendario</a></li>
                                                        <li><a href="{{url('especialistas')}}" class="gn-icon gn-icon-help">Especialistas</a></li>
                                                    <li><a href="{{url('rips')}}" class="gn-icon gn-icon-article">RIP</a></li>
                                                <li>
                                            <a href="{{url('documentos')}}" class="gn-icon gn-icon-download">Documentos</a>
                                        </li>
                                    <li><a href="" class="gn-icon gn-icon-article">Administración</a></li>
                            </ul>
        </nav>
        </li>
        <li><div style="float:left"><a href="{{url('home')}}"><img src="../../logos/logo.png" alt="Logo"  height="50" holastyle="width:100%; max-width:200px" class="img-responsive"></a></div></li>
            <li><!-- Authentication Links -->
                  @guest
                            <li style="text-align: right;" class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
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
                        @endguest</li>
                
                    
		</ul>	    
        </div><!-- /container -->
        <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
        </script>
          <div>
        
       
                   
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="../js/jquery-3.3.1.min.js" ></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>
</html>