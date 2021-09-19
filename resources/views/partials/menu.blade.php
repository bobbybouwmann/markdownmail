<div class="header-wrapper">

    <div class="header-title">

        <div class="site-title">
            <a href="/"><h1>MarkdownMail</h1></a>
        </div>

    </div>

    <div class="menu-wrapper">

        <nav class="navbar navbar-default navbar-static-top top-menu">

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                @if (auth()->check())
                    <ul class="nav navbar-nav">
                        <li {{ Request::is('themes') ? 'class=active' : '' }}><a href="{{ route('themes.index') }}">My Themes</a></li>
                        <li {{ Request::is('themes/new') ? 'class=active' : '' }}><a href="{{ route('themes.create') }}">New Theme</a></li>
                    </ul>
                @endif

                <ul class="nav navbar-nav navbar-right">

                    @if (auth()->guest())
                        <li><a href="{{ route('login', 'github') }}"><i class="fa fa-github fa-lg"></i>
                                Login with Github</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ auth()->user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif

                </ul>

            </div>

        </nav>

    </div>

</div>