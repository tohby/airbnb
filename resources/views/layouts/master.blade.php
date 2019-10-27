<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Homey') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('css/homey.css') }}" rel="stylesheet">

</head>

<body class="{{ request()->is('messages') || request()->is('messages/*') ? 'no-overflow' : '' }}">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light fixed-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
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
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('register'))
                            <a class="nav-link btn btn-primary text-white btn-lg"
                                href="{{ route('register') }}">{{ __('Register') }}</a> @endif
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <div class="d-md-none">
                                <a class="nav-link" href="/the-hub">The Hub</a>
                                <a class="nav-link" href="/profile/{{Auth::user()->slug}}">Profile</a>
                                <a class="nav-link" href="/news">News</a>
                                <a class="nav-link" href="/messages">Conversations</a>
                                <a class="nav-link" href="/directories">Directories</a>
                                <a class="nav-link" href="/the-hub">Consultation</a>
                            </div>
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sidenav d-none d-md-block">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="logo/homey-logo@2x.png" Alt="">
            </a>
            <hr>
            <div id="menu" class="px-3">
                <a href="/dashboard"
                    class="{{ request()->is('dashboard') || request()->is('dashboard/*') ? 'active' : '' }}">
                    Dashboard</a>
                <a href="/rooms" class="{{ request()->is('rooms') ? 'active' : '' }}"></i>Rooms</a>
                <a href="/profile"
                    class="{{ request()->is('profile/*') || request()->is('profile/*/edit') || request()->is('product/*') ? 'active' : '' }}"></i>Profile</a>
                <a href="/news"
                    class="{{ request()->is('news') || request()->is('news/*') ? 'active' : '' }}"></i>News</a>
                <a href="/messages"
                    class="{{ request()->is('messages') || request()->is('messages/*') ? 'active' : '' }}"></i>Conversations</a>
                <a href="/directories"
                    class="{{ request()->is('directories') || request()->is('directories/*') ? 'active' : '' }}"></i>Directories</a>
            </div>
        </div>
        <main class="py-4 px-2">
            <div class="container my-3">
                @include('layouts/messages')
            </div>
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'news-content' );
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"
        integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous">
    </script>

</body>

</html>
