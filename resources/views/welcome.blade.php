<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('welcome.name', 'Ever After') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body class="welcomePage">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm  ">
            <div class="container" >
            <div class="container-fluid">
                <a class="navbar-brand fw-bold fs-3" href="/">
                <img src="./img/Logo.png" alt="Logo" width="150" height="150" class="d-inline-block align-text-center">
                Ever After
                </a>
  </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link fw-bold fs-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link fw-bold fs-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown fw-bold fs-3">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item fw-bold fs-3" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <a class="dropdown-item fw-bold fs-3" href="{{ route('logout') }}" {{-- change logout to profile --}}
                                       onclick="event.preventDefault();
                                                     document.getElementById('profile-form').submit();">
                                        {{ __('Profile') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <form id="profile-form" action="{{ route('logout') }}" method="POST" class="d-none"> {{-- change logout to profile --}}
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
            
            <div class="container-fluid  d-flex align-items-center homePage">
            
            <div class="col-5 text-end text-Black "style="height: 700px;">
                <p class="fw-bolder fs-1">EVER AFTER:</p>
                <p class=" fs-2 pb-5">A StuDate Website for Me & You</p>
                <img src="./img/ChatPic1.png" style="width: 450px" >
                
                </div>
            
            <div class="col-1 text-center text-white pt-1  ps-5 ms-3 mt-1 " style="height: 800px;">
                <img src="./img/Logo.png" class="align-top" style="width: 200px" >
                
                
                </div>

                
            </div>
            
            
        <main class="">
            @yield('contents')
        </main>
    </div>
</body>
</html>
