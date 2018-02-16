<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">{{ trans('layouts.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{ url('/') }}">{{ trans('layouts.main_page') }}</a>
                </li>
                @guest
                <li><a href="{{ route('login') }}">{{ trans('layouts.authorization') }}</a></li>
                <li><a href="{{ route('register') }}">{{ trans('layouts.register') }}</a></li>
                @endguest
            </ul>

            <!-- Right Side Of Navbar -->

            <!-- Authentication Links -->
            @if(Auth::user())
                <ul class="nav navbar-nav navbar-right">
                    <li><p class="navbar-text">{{ trans('layouts.logined_as') }}: <strong>{{ Auth::user()->username }}</strong></p></li>
                    <li><a href="{{ route('logout') }}">{{ trans('layouts.logout') }}</a></li>
                </ul>
            @endif

        </div>
    </div>
</nav>