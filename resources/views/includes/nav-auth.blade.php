<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('welcome') }}">
        <img src="{{ asset('images/small_grey_logo.png') }}" width="30" height="30" alt="">
        Dare Capital
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('welcome') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdownLink" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="aboutDropdownLink">
                    <a class="dropdown-item" href="{{ route('about') }}#our-team">Meet our team</a>
                    <a class="dropdown-item" href="{{ route('about') }}">About Dare Capital</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('profile.index') }}">Edit Profile</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="resourcesDropdownLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Resources
                </a>
                <div class="dropdown-menu" aria-labelledby="resourcesDropdownLink">
                    <a class="dropdown-item" href="{{ route('broker-referral') }}">Broker Referrals</a>
                    <a class="dropdown-item" href="{{ route('get-financing') }}">Get Financing</a>
                    <a class="dropdown-item" href="{{ route('apply') }}">Application</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="storiesDropdownLink" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Stories
                </a>
                <div class="dropdown-menu" aria-labelledby="storiesDropdownLink">
                    <a class="dropdown-item" href="{{ route('blog', ['category' => 'case-studies']) }}">Case Studies</a>
                    <a class="dropdown-item" href="{{ route('blog', ['category' => 'education']) }}">Advice for
                        Leaders</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('posts.index') }}">Manage</a>
                    <a class="dropdown-item" href="{{ route('posts.create') }}">Add New</a>
                </div>
            </li>
            <a class="nav-item nav-link nav-social" href="https://www.twitter.com/coledoescapital"
               target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
            <a class="nav-item nav-link nav-social" href="https://www.facebook.com/DareBizCapital"
               target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
            <a class="nav-item nav-link nav-social" href="https://www.linkedin.com/company/darecapital"
               target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
            <a class="nav-item nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </ul>
    </div>
</nav>
