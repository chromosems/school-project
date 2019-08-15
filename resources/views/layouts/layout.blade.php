<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.jpg') }}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> After Sales Support System </title>
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
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/"><span class="text-primary">AFTER SALES</span> SUPPORT </a>
            {{-- Uncomment this if u need it --}}
            {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    @guest
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
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

        <div class="container-fluid">
          <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
              <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">
                            <span data-feather="home"></span>
                            Dashboard <span class="sr-only">(current)</span>
                        </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/tickets">
                        <span data-feather="users"></span>
                        Tickets
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/customers">
                        <span data-feather="users"></span>
                        Customers
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/services">
                        <span data-feather="users"></span>
                        services
                    </a>

                    
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/technicians">
                        <span data-feather="file"></span>
                        Technicians
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="/companies">
                        <span data-feather="file"></span>
                        Companies
                    </a>
                  </li>

              </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 p-4">

                @include('flash::message')

                @yield('content')

            </main>
          </div>
        </div>
    </div>
</body>
</html>
