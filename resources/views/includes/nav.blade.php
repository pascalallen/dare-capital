<nav class="navbar navbar-expand-lg justify-content-end mt-md-5 mr-md-5">
    <button class="text-white navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <a class="text-white nav-item nav-link" href="{{ route('welcome') }}">Home</a>
        <a class="text-white nav-item nav-link" href="{{ route('about') }}">About Us</a>
        <div class="nav-item dropdown">
            <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false">
                Resources
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Broker Referrals</a>
            </div>
        </div>
        <a class="text-white nav-item nav-link" href="{{ route('blog') }}">Stories</a>
        <a class="text-white nav-item nav-link nav-social" href="https://www.twitter.com/coledoescapital"
           target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
        <a class="text-white nav-item nav-link nav-social" href="https://www.facebook.com/DareBizCapital"
           target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
        <a class="text-white nav-item nav-link nav-social" href="https://www.linkedin.com/company/darecapital"
           target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
    </div>
</nav>
