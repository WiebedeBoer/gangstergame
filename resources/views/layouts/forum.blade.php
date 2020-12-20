<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!--title-->
    <title>Gangsters @yield('title', 'Gangsters')</title>
	<!--meta-->
	<meta name="description" content="Free browser based games, with such games as Roma and Shugo, Middle, Gangsters, and Three Kingdoms."/>
	<meta name="keywords" content="romegames, roma, shugo, gangsters, online game, pbbg, mmo, mmorts, mmorpg, browser based game, browser game, shugo.nl, romegames.nl">
	<meta http-equiv="Content-Language" content="en-us">
	<meta name="author" content="Wiebe Eling de Boer">
	<meta name="copyright" content="2020 Wiebe Eling de Boer">
	<meta name="date" content="2020-12-20">
	<meta name="robots" content="INDEX, FOLLOW">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <!--laravel app Styles -->

	<!-- Styles -->
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
   <!-- Fonts -->
    <!--jquery-->
	<link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!--bootstrap-->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body class="forum-cards">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Medieval
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
						
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Dashboard</a></li>
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

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

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
        <main class="py-4">
            @yield('content')
        </main>
		</div>
		
    </div>

</body>
</html>