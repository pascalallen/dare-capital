<nav class="navbar navbar-expand-md nav-top shadow-sm fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon mt-2"><i class="fas fa-caret-down"></i></span>
    </button>

    <!-- Left Side Of Navbar -->
    <ul class="navbar-nav nav-left">
        <li class="nav-item nav-logo" style="width: 100px">
            <a class="navbar-brand ml-1 mr-1" href="{{ url('/') }}">
                <img
                    src="{{ asset('images/Dare_Logo_AdmiralBlue_RGB.png') }}"
                    class="img-fluid"
                    alt="Dare_Logo_AdmiralBlue_RGB.png"
                />
            </a>
        </li>
    </ul>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item nav-tagline">
                <a class="nav-link" href="{{ url('/') }}">{{ __('Dare to build. Dare to grow. Dare to give.') }}</a>
            </li>
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#apply-now-form">{{ __('Apply Now') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about') }}">{{ __('About Us') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">{{ __('Stories') }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.twitter.com/coledoescapital" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.facebook.com/DareBizCapital" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=https://www.linkedin.com/company/darecapital" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            </li>
            @auth
                <li class="nav-item dropdown">
                    <a
                        id="navbarDropdown"
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('posts.index') }}">
                            {{ __('Posts') }}
                        </a>
                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                            {{ __('Profile') }}
                        </a>
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
            @endauth
        </ul>
    </div>
</nav>
