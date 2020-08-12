<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }} &mdash;
                    <small class="text-dark">сервис оценки переводов!</small>
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
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold" href="{{ route('login') }}">
                                    {{ __('Вход') }}
                                </a>
                            </li>
                            <li class="nav-item mt-2 separator">
                                <span class="text-dark">|</span>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item font-weight-bold">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item mr-3 mt-2">
                                <i class="fa fa-user text-info"></i>
                                <span class="font-weight-bold">{{ Auth::user()->name }} ( {{ Auth::user()->role->name }} )</span>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                            <li class="nav-item" id="suggest" style="z-index: 9999 !important;">
                                <div class="dropdown">
                                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Переводы
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                      <a class="dropdown-item" href="/post/create">Предложить перевод</a>
                                      <a class="dropdown-item" href="/my">Мои переводы</a>
                                      @if (Auth::user()->role->id === 2)
                                        <a class="dropdown-item text-danger" href="/editor/check">Проверить переводы</a>
                                      @elseif (Auth::user()->role->id === 3)
                                        <a class="dropdown-item text-danger" href="/editor/check">Проверить переводы</a>
                                      @endif
                                    </div>
                                  </div>
                            </li>
                            @if(Auth::user()->role->id === 1)
                            <li class="nav-item ml-2" style="z-index: 9999 !important;">
                                <div class="dropdown">
                                    <button class="btn btn-outline-success dropdown-toggle" type="button" id="dropdownUsers" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Пользователи
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownUsers">
                                        <a href="/users/create" class="dropdown-item">Создать пользователя</a>
                                        <a href="/users/create" class="dropdown-item">Заблокировать пользователя</a>
                                        <a href="/users/create" class="dropdown-item">Изменить роль пользователя</a>
                                    </div>
                                </div>
                            </li>
                            @endif
                            <li class="nav-item">
                                <a href="{{ route('logout') }}" id="logout" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="ml-2 btn btn-outline-danger">
                                   Выход
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
       
        <div class="page-footer font-small pt-4 bg-white shadow-sm">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <span class="p-5 font-weight-bold text-info">
                        Все права защищены (C) 2020
                    </span>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
