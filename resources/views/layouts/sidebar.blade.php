<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">Guest</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <form action="/search" method="POST" role="search">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search Fire Alarms Type " name="search">
        </div>
    </form>
    <ul class="nav menu">
        {{--<li class="parent "><a data-toggle="collapse" href="#sub-item-1">--}}
                {{--<em class="fa fa-navicon">&nbsp;</em> Configurations <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>--}}
            {{--</a>--}}
            {{--<ul class="children collapse" id="sub-item-1">--}}
                {{--<li><a class="" href="#">--}}
                        {{--<span class="fa fa-arrow-right">&nbsp;</span> Staff--}}
                    {{--</a></li>--}}
                {{--<li><a class="" href="#">--}}
                        {{--<span class="fa fa-arrow-right">&nbsp;</span> Users--}}
                    {{--</a></li>--}}
                {{--<li><a class="" href="#">--}}
                        {{--<span class="fa fa-arrow-right">&nbsp;</span> Accounts--}}
                    {{--</a></li>--}}
            {{--</ul>--}}
        {{--</li>--}}
        <li><a href="/dashboard"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>

        @foreach($services as $service)
            <li><a href="/services/{{ $service->id }}"><em class="fa fa-server"></em>    {{ $service->name }}</a></li>
        @endforeach

        <li><a href="/customer"><em class="fa fa-calendar">&nbsp;</em>Customers </a></li>
        {{--<li><a href="/cctv_cameras"><em class="fa fa-calendar">&nbsp;</em></a></li>--}}
        {{--<li><a href="/access_controls"><em class="fa fa-calendar">&nbsp;</em>Access Control</a></li>--}}
        {{--<li><a href="/fire_alarms"><em class="fa fa-calendar">&nbsp;</em>Fire Alarm</a></li>--}}
        <li><a href="/technician"><em class="fa fa-calendar">&nbsp;</em>Technicians</a></li>


        <li>
            {{-- <a href="/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a> --}}
            <a class="fa fa-power-off" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>
</div><!--/.sidebar-->
