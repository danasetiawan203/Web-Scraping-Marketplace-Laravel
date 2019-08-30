<div class="navbar navbar-default header-highlight">
    <div class="navbar-header bg-teal-300">
        <a class="navbar-brand" href="{{route('superadmin')}}"><img src="{{url('global_assets/images/logofix2.png')}}" alt="" width="200" height="150"></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>

        <p class="navbar-text"><span class="label bg-success">Online</span></p>

        <ul class="nav navbar-nav navbar-right">
            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="/uploads/avatars/{{Auth::user()->foto}}" alt="">
                    <span>{{Auth::user()->name}}</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="{{route ('superadmin.profile' )}}"><i class="icon-user-plus"></i> My profile</a></li>
                  <li class="divider"></li>
                    <li><a href="{{route ('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="icon-switch2"></i> Logout</a>
                    <form id="logout-form" action="{{route ('logout') }}" method="post" style="display : none;">
                      {{ csrf_field() }}
                    </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
