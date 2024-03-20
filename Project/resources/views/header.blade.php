
 

<header class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 px-4">
        <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center text-center">
    <img class="img-fluid navbar-logo" src="img/logo-no-background2.jpg" alt="Logo" style="width: 250px; height: 85px;">
</a>


                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="nav-item nav-link">
                    <h1>About Us</h1>
                </div>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Profile</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="" class="dropdown-item">Sign Out</a>
                            </div>
                        </div>
                        <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                        <div class="nav-item dropdown">
                        <a href="#propertyTypes" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Property</a>
                            <div class="dropdown-menu rounded-0 m-0">
                                <a href="{{ url('/propertyList') }}" class="dropdown-item">Property List</a>
                                <a href="{{ url('/') }}#PropertyTypes" class="dropdown-item">Property Type</a>
                                <a href="{{ url('/about') }}#propertyAgents" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                        <a href="{{ url('/mortgage-calc') }}" class="nav-item nav-link">Caluclator</a>
                    </div>
                    <a href="{{url('/createProperty')}}" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>                </div>
            </nav>
    </header>

