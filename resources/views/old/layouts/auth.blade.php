<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Merinomood</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <livewire:styles>
</head>
<body>
    <div id="app">
        <nav >
            <div class="container">
                <div class="flex justify-center mb-5 py-6">
                    <a href="/" class="w-full">
                        <svg class="fill-current w-full" width="145" height="56" viewBox="0 18 145 56">
                            <text transform="translate(0 73)" font-size="45" font-family="Winglet">
                                <tspan x="-35" y="0">MERINOMOOD</tspan>
                            </text>
                        </svg>
                    </a>
                </div>
                <div id="navbarSupportedContent">
                    <div class="ml-auto flex justify-center">
                        <!-- Authentication Links -->
                        @guest
                            <div>
                                <a class="text-lg font-medium text-orange-450 text-underline" href="{{ route('login') }}">Sign in</a>
                            </div>
                            <p class="text-lg font-medium text-gray-550 px-4">or</p>
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link text-lg font-medium text-orange-450 text-underline" href="{{ route('register') }}">Sign up</a>
                                </div>
                            @endif
                        @else
                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <livewire:scripts>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
