<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tech Support') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="path/to/dist/feather.js"></script> --}}
    <script src="{{ asset('js/feather-icons/feather.min.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
              font-size: 3.5rem;
            }
        }
    </style>

    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/"><span class="text-primary">TECH</span> SUPPORT</a>
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    @guest
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @else
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                        >Sign out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @endguest
                </li>
            </ul>
        </nav>

        <main class="py-4">
                @yield('content')
            </main>

        {{-- <div class="container-fluid">
            <div class="row">

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

                    @yield('content')

                </main>
            </div>
        </div> --}}
    </div>
</body>
</html>
