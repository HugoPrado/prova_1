<!DOCTYPE html>
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
</head>
<body>

    <div id="app">

            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                            <li class="nav-item {{Request::path() === 'home' ? "active" : ""}}">
                                    @if (Route::has('login'))
                                        @auth
                                            <h3><a class="nav-link " href="{{ url('/home') }}" >Home <span class="sr-only">(Página atual)</span></a></h3>
                                        @endauth
                                    @endif
                              </li>
                              <li class="nav-item dropdown {{Request::path() === 'cadastros' || Request::path() === 'cadastros/create'  ? "active" : ""}}">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  Cadastros
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="/cadastros/create">Novo</a>
                                  <a class="dropdown-item" href="/cadastros/">Listar</a>
                                </div>
                              </li>
                              <li class="nav-item dropdown {{Request::path() === 'filmes' || Request::path() === 'filmes/create' ? "active" : ""}}">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Filmes
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                      <a class="dropdown-item" href="/filmes/create">Novo</a>
                                      <a class="dropdown-item" href="/filmes/">Listar</a>
                                    </div>
                                  </li>
                                  <li class="nav-item dropdown {{Request::path() === 'enderecos'  || Request::path() === 'enderecos/create' ? "active" : ""}}">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                          Endereços
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                          <a class="dropdown-item" href="/enderecos/create">Novo</a>
                                          <a class="dropdown-item" href="/enderecos/">Listar</a>
                                        </div>
                                      </li>
                      </ul>
                      <!-- Right Side Of Navbar -->
                      <ul class="navbar-nav ml-auto">
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
                  </nav>
        <main class="py-4">
            <div class="container">
                @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
