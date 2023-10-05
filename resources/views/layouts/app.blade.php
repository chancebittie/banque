<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm sticky-top " style="background-color: #f8fafc">
            <div class="container">
                <a class="navbar-brand " href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="uploads/logo/logoA.png" style="max-height: 100px;" class="d-block w-100" alt="...">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto fs-5" id="top_nav">
                        {{-- <li class="nav-item">
                            <a class="nav-link " href="{{ url('/') }}">Acceuil</a>
                        </li> --}}
                        {{-- <li class="nav-item">
                            <a class="nav-link " href="{{ route('contact') }}">Nous contacter</a>
                        </li> --}}
                        {{-- @auth
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('user') }}">Mon compte</a>
                        </li>
                        @endauth --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto fs-5">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item  btn btn-danger rounded-pill ">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Accéder à mon compte') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item btn mx-2 btn-light rounded-pill register" style="background-color: white">
                                    <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Devenir client') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('user') }}">
                                        {{ __('Mon compte') }}
                                    </a>
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

        <main>
            @yield('content')
        </main>
    </div>

    <style>

        #top_nav li a:active,
        #top_nav li a:focus,
        #top_nav li a:hover{
            font-size: 19px;
            transition: 1s;
            color: red;
            border-radius: 20px;
            background-color: white;
            box-shadow: inset  0 0 5px #ed6505,
                        inset 0 0 15px #ed3c05,
                        inset 0 0 25px #d25a1a;
                }
        .bordure{
            /* border: solid black; */
            /* border-right: solid #d25a1a; */
            /* border-top-right-radius: 25%; */

        }
    </style>
    @livewireScripts
</body>
</html>
