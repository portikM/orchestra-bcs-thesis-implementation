<nav id="dashboardNav" class="navbar is-white">
    <div class="container">
        <div class="navbar-brand">
            @auth('admin')
            <a class="navbar-item brand-text headingFont" href="{{ url('/dashboard') }}">@lang('content/landing.nav_dashboard')</a>
            @else
            <a class="navbar-item brand-text headingFont" href="{{ url('/dashboard') }}">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
            @endauth
            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="../lang/en">EN</a>
                <a class="navbar-item" href="../lang/ua">UA</a>
                <span class="navbar-item">
                    <a class="button is-outlined" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        <span>@lang('content/landing.nav_logout')</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </span>
            </div>
        </div>
    </div>
</nav>