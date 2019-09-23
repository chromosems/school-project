<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">
                            <span data-feather="home"></span>
                            <h6> Dashboard</h6> <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/tickets">
                            <span data-feather="users"></span>
                            <i class="fas fa-ticket">
                                <h6>Tickets</h6>
                            </i>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/services">
                            <span data-feather="users"></span>
                            <h6>services</h6>
                        </a>


                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/technicians">
                            <span data-feather="file"></span>
                            <h6> Technicians</h6>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/companies">
                            <span data-feather="file"></span>
                            <h6>Companies</h6>
                        </a>
                    </li>

                    <div class="card mb-2">
                        <div class="card-body">


                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Archieves
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <ol class="list-unstlyed">
                                        @foreach ($achieves as $stats)
                                        <li><a href="/tickets/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">{{$stats['month'] . ' '. $stats['year']}}</a></li>
                                        @endforeach
                                    </ol>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-2">
                        <div class="card-body">
                            <h4> Tags</h4>
                            <ol class="list-unstlyed">
                                @foreach ($tags as $tag)
                                <li>
                                    <a href="/tickets/tags/{{ $tag}}">
                                        {{$tag->name}}
                                    </a>
                                </li>
                                <hr>
                                @endforeach
                            </ol>
                        </div>
                    </div>
                </ul>
            </div>

        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 p-4">

            @include('flash::message')

            @yield('content')

        </main>
    </div>
</div>