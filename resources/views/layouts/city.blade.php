<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--title-->
    <title>Gangsters Game</title>
    <!--meta-->
	<meta name="author" content="Wiebe Eling de Boer">
	<meta name="copyright" content="2020 Wiebe Eling de Boer">
    <meta name="description" content="Free browser based games, with such games as Roma and Shugo, Middle, Gangsters and Three Kingdoms."/>
	<meta name="keywords" content="romegames, roma, shugo, gangsters, online game, pbbg, mmo, mmorts, mmorpg, browser based game, browser game">
	<meta http-equiv="Content-Language" content="en-us">
	<meta name="date" content="2020-12-20">
	<meta name="robots" content="INDEX, FOLLOW">
    <!-- Scripts -->
    <script type="module" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script type="module" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="module" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!--bootstrap-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--jquery-->
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
	<!-- Styles -->
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">

    <!--Fonts-->

	<!--music-->

    <!--library: three.js-->
    <script type="text/javascript" src="{{ asset('library/three.js') }}"></script>
    <!--camera controls-->
    <script type="text/javascript" src="{{ asset ('controls/FPControls.js') }}"></script>
    <!--collision detection-->
    <script type="text/javascript" src="{{ asset ('collision/collision.js') }}"></script>
    <!--environment: plane en skybox-->
    <script type="text/javascript" src="{{ asset ('environment/plane.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('environment/Skybox.js') }}"></script>
    <!--lighting-->
    <script type="text/javascript" src="{{ asset ('lighting/WorldLight.js') }}"></script>
    <!--loaders-->
    <script type="text/javascript" src="{{ asset ('loaders/OBJLoader.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('loaders/MTLLoader.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('loaders/ModelLoader.js') }}"></script>
    <!--building generator-->
    <script type="text/javascript" src="{{ asset ('building/generator.js') }}"></script>
    <!--media buildings-->
    <script type="text/javascript" src="{{ asset ('building/newspaper.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/radio.js') }}"></script>
    <!--commercial buildings-->
    <script type="text/javascript" src="{{ asset ('building/gunsmith.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/autodealer.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/movietheatre.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/cabcompany.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/removalcompany.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/bank.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/smallbank.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/hotel.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/smallhotel.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/departmentstore.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/smalldepartmentstore.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/mediumcommercial.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/commercial.js') }}"></script>
    <!--industrial buildings-->
    <script type="text/javascript" src="{{ asset ('building/warehouse.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/docks.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/freight.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/industrial.js') }}"></script>
    <!--residential buildings-->
    <script type="text/javascript" src="{{ asset ('building/house.js') }}"></script>
    <!--tenement buildings-->
    <script type="text/javascript" src="{{ asset ('building/tenement.js') }}"></script>
    <!--municipal buildings-->
    <script type="text/javascript" src="{{ asset ('building/railroad.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/firedepartment.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/hospital.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/education.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/postal.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/financial.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/baths.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/cultural.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/utilities.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/university.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/army.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/court.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/fbibureau.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/prison.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/policedepartment.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/cityhall.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/church.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/synagogue.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('building/orphanage.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Gangsters
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

		<!--game menu-->
		<div class="game-menu">
					<div class="links">
						<a href="/forum">Forum</a>
						<a href="/manual">Manual</a>
						<a href="/gangs">Gang</a>
						<a href="/games">City</a>
						<a href="/newspaper">Newspaper</a>
						<a href="/users/{{ Auth::user()->id }}">Account</a>
					</div>			
		</div>
		
		
		<!--content-->
		<div class="vh-100">
		@include('session')
        <main class="py-4">
            @yield('content')
        </main>
		</div>

    </div>
</body>
</html>