<style>
    button {
        border: none;
        background-color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-size: 10pt;
        font-weight: bolder;
    }
</style>

<header class="container-fluid nav-bar bg-transparent">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 px-4">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center text-center">
            <img class="img-fluid navbar-logo" src="img/logo-no-background2.jpg" alt="Logo" style="width: 250px; height: 85px;">
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        @php
        $currentPage = basename(request()->url());
        $pageNames = [
            'register' => 'Register',
            'login' => 'Login',
            'contact' => 'Contact',
            'createProperty' => 'Create Property',
            'mortgage-calc' => 'Mortgage Calculator',
            'mortgage-result' => 'Mortgage Calculator',
            'about' => 'About',
            'realtor' => 'Realtors',
            'propertyList' => 'Property List',
            'termsOfService' => 'Terms of Service'
        ];
        $pageTitle = $pageNames[$currentPage] ?? 'Home';
        @endphp

        <div class="nav-item nav-link">
            <h1>{{ $pageTitle }}</h1>
        </div>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
            @auth
<div class="nav-item dropdown">

    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
        {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
    </a>
    <div class="dropdown-menu rounded-0 m-0">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item">Sign Out</button>
        </form>
    </div>

</div>
@else

@guest
    <a href="{{ url('/register') }}" class="nav-link">Register</a>
    @endguest
  <a href="{{ route('login') }}" class="nav-link">Login</a>

    @endauth

                <a href="{{ url('/') }}" class="nav-link active">Home</a>
                <a href="{{ url('/about') }}" class="nav-link">About</a>
                <a href="{{ url('/property-listings') }}" class="nav-link">Properties</a>
                <a href="{{ url('/mortgage-result') }}" class="nav-link">Calculator</a>
                <a href="{{ url('/realtor') }}" class="nav-link">Realtors</a>
                <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            </div>

            @auth
            @if(Auth::user()->isRealtor())
            <a href="{{ url('/createProperty') }}" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
            @endif
            @endauth
        </div>
    </nav>
</header>