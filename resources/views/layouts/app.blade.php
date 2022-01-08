<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>X-Ray Classifier</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <link rel="stylesheet"
        href="{{ session('theme', 'darkly') === 'bootstrap' ? asset('bootstrap/css/bootstrap.min.css') : asset('bootstrap/darkly/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')
    @yield('js')
</head>

<body>
    <div id="sidebar" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Home</a>
        <hr class="sidenav-line">
        <a href="{{ route('upload_image') }}">Upload Image</a>
        <hr class="sidenav-line">
        <a href="http://www.google.com/search?q=hospitals+near+me" target="_blank">Hospitals Near Me</a>
        <hr class="sidenav-line">
        <a href="https://www.who.int/indonesia/news/novel-coronavirus/qa/qa-for-public" target="_blank">Get Help</a>
        <hr class="sidenav-line">
        <a href="https://developers.google.com/machine-learning/practica/image-classification/convolutional-neural-networks"
            target="_blank">Learn More</a>
    </div>
    <div id="app">
        <nav
            class="navbar navbar-expand-md {{ session('theme', 'darkly') === 'bootstrap' ? 'navbar-light' : 'navbar-dark' }} shadow-sm">
            <div id="navbar-container" class="container">
                @auth
                    <div class="sidebar-toggler">
                        <span class='navbar-toggler-icon' id="sidebar-toggler" onclick="openNav()"></span>
                    </div>
                @endauth
                <a class="navbar-brand" href="{{ url('/') }}">
                    X-Ray Classifier
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item theme-list">
                            <form action="{{ route('change_theme') }}" method="post" name="theme-form">
                                @csrf
                                @method('PUT')
                                {{-- <label for="theme-select">Theme: </label> --}}
                                <select class="form-select d-inline theme-select" name="theme" id="theme-select">
                                    <option value="light"
                                        {{ session('theme', 'darkly') === 'bootstrap' ? 'selected' : '' }}>Light
                                    </option>
                                    <option value="dark"
                                        {{ session('theme', 'darkly') === 'bootstrap' ? '' : 'selected' }}>Dark
                                    </option>
                                </select>
                            </form>
                        </li>
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
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
</body>

</html>
