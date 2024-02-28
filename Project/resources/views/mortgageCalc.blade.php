<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phillow - Create Property</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Javascript Link-->
    <script src="js/base.js"></script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        
        (function () {
            'use strict'
        
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
        
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
        
                form.classList.add('was-validated')
                }, false)
            })
        })()
  </script>
      <style>
        p,ul,li {
            font-family: Forum,cursive;
        }
        h1,a{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }
        .result-container {
            margin-top: 20px;
        }
    
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


                <!-- Navbar Start -->
                <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 px-4">
        <a href="index.html" class="navbar-brand d-flex align-items-center text-center">
    <img class="img-fluid navbar-logo" src="img/logo-no-background2.jpg" alt="Logo" style="width: 250px; height: 85px;">
</a>


                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="nav-item nav-link">
                    <h1>Mortgage Clalculator</h1>
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
                    </div>
                    <a href="{{url('/createProperty')}}" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->


    
        <!-- Mortgage Start -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1>Mortgage Calculator</h1>
            </div>
        <div class="wow fadeInUp" data-wow-delay="0.5s">
            <!-- Form for mortgage input -->
             <form method="post" action="{{ route('mortgage.calculate') }}">
                 @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="mb-3">
                            <label for="principal">Principal Amount:</label>
                            <input type="number" id="principal" name="principal" class="form-control" required>                            </div>
                            <div class="mb-3"
                              <label for="interest_rate">Interest Rate (%):</label>
                            <input type="number" step=".01" id="interest_rate" name="interest_rate" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="term">Term (years):</label>
                            <input type="number" step=".01" name="term" class="form-control" required>
                        </div>
                        <div class="text-center"> <!-- Centering the button -->
                            <button type="submit" class="btn btn-primary w-50 py-3 d-lg-flex">Calculate</button>                            </div>
                        </div>
                    </div>
                </form>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
                                <h1>Mortgage Calculation Result</h1>
                                        @isset($data['monthly_payment'])
                                            <h2>Monthly Payment</h2>
                                            <p>Total: ${{ $data['monthly_payment']['total'] }}</p>
                                            <p>Mortgage: ${{ $data['monthly_payment']['mortgage'] }}</p>
                                            <p>Property Tax: ${{ $data['monthly_payment']['property_tax'] }}</p>
                                            <p>HOA: ${{ $data['monthly_payment']['hoa'] }}</p>
                                            <p>Home Insurance: ${{ $data['monthly_payment']['annual_home_ins'] }}</p>
                                        @endisset

                                        @isset($data['annual_payment'])
                                            <h2>Annual Payment</h2>
                                            <p>Total: ${{ $data['annual_payment']['total'] }}</p>
                                            <p>Mortgage: ${{ $data['annual_payment']['mortgage'] }}</p>
                                            <p>Property Tax: ${{ $data['annual_payment']['property_tax'] }}</p>
                                            <p>HOA: ${{ $data['annual_payment']['hoa'] }}</p>
                                            <p>Home Insurance: ${{ $data['annual_payment']['home_insurance'] }}</p>
                                        @endisset

                                        @isset($data['total_interest_paid'])
                                            <h2>Total Interest Paid</h2>
                                            <p>${{ $data['total_interest_paid'] }}</p>
                                     @endisset
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
        </div>
    </div>
</div>
              
        <!-- Mortgage End -->

       
       <!-- Footer Start -->
       <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                            <h5 class="text-white mb-4">Get In Touch</h5>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>2040 lane ln, lacaster,USA</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(778)-989-0987</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>Phillow@Phillow-houses.biz</p>
                            <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

<div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="{{ url('/about') }}">About Us</a>
                    <a class="btn btn-link text-white-50" href="{{ url('/contact') }}">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="{{ url('/about') }}#ourServices">Our Services</a>
                    <a class="btn btn-link text-white-50" href="{{url('/termsOfService')}}#privacyPolicy">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="{{url('/termsOfService')}}">Terms & Condition</a>
                </div>

<div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
    <a href="{{ url('/') }}" class="navbar-brand d-flex justify-content-center">
        <img src="img/logo-no-background2.jpg" alt="Logo" style="max-width: 250px; height: auto; max-height: 170px; margin-top: 10px;">
    </a>
</div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Phillow</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    
    <!--Required form-->
    <script src="js/base.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>