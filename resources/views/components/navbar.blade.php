<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="{{ asset('template/assets/img/navbar-logo.svg') }}" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/skill">Skill</a></li>
                <li class="nav-item"><a class="nav-link" href="/project">Project</a></li>
                <li class="nav-item"><a class="nav-link" href="/certificates">Certificates</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <a href="{{ route('logout') }}" class="nav-link" 
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ __('Log Out') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
            </ul>
        </div>
    </div>
</nav>