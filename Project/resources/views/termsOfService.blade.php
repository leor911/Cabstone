<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Index</title>
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
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Proza:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        h1,a{
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
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
                                <a href="#PropertyTypes" class="dropdown-item">Property Type</a>
                                <a href="{{ url('/about') }}#propertyAgents" class="dropdown-item">Property Agent</a>
                            </div>
                        </div>
                        <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                    </div>
                    <a href="{{url('/createProperty')}}" class="btn btn-primary px-3 d-none d-lg-flex">Add Property</a>                </div>
            </nav>
        </div>
        <!-- Navbar End -->


<!-- tos start -->
        <div class="container mt-5" id="list">
    <h1 class="text-center">Terms of Service</h1>

    <div class="text-center" >
        <ol>
            <li class="list-group-item">**License to Use the Website**
                <p>Unless otherwise stated, Phillow and/or its licensors own the intellectual property rights for all material on our website. All intellectual property rights are reserved.</p>
                <p>You may view, download, and print pages from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.</p>
            </li>

            <li class="list-group-item">**Acceptable Use**
                <p>You must not:</p>
                <ul>
                    <li>Use our website in any way that is unlawful, illegal, fraudulent, or harmful.</li>
                    <li>Use our website to copy, store, host, transmit, send, use, publish, or distribute any material that consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit, or other malicious computer software.</li>
                    <li>Conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction, and data harvesting) on or in relation to our website without our express written consent.</li>
                </ul>
            </li>

            <li class="list-group-item">**Limitations of Liability**
                <p>In no event shall Phillow, nor any of its officers, directors, and employees, be liable to you for anything arising out of or in any way connected with your use of this website, whether such liability is under contract, tort, or otherwise.</p>
            </li>

            <li class="list-group-item">**Governing Law**
                <p>These terms shall be governed by and construed in accordance with the laws of the United States Of America, and any disputes relating to these terms and conditions will be subject to the exclusive jurisdiction of the courts of the United States Of America.</p>
            </li>

            <li class="list-group-item">**Changes to Terms**
                <p>We reserve the right to revise these terms of service at any time without notice. By using this website, you are agreeing to be bound by the current version of these terms of service.</p>
            </li>

            <li class="list-group-item">**Contact Information**
                <p>If you have any questions about these Terms of Service, please contact us.</p>
            </li>
        </ol>
    </div>
</div>
<!-- tos end -->

<!-- privacy start -->
<div class="container mt-5" id="privacyPolicy">
    <h1 class="text-center">Privacy policy</h1>

    <div class="text-center" >
    <p>We at Phillow are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and disclose personal information when you use our website.</p>
        <ol>
            <li class="list-group-item"><strong>1. Information We Collect</strong>
            <p>We may collect personal information such as your name, email address, and phone number when you fill out forms on our website or communicate with us through other means.</p>
            </li>

            <li class="list-group-item"><strong>2. How We Use Your Information</strong>
            <p>We use the information we collect to provide and improve our services, communicate with you, and personalize your experience. We may also use your information to send you promotional emails or newsletters.</p>
            </li>

            <li class="list-group-item"><strong>3. Information Sharing and Disclosure</strong>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent. However, we may share your information with trusted third-party service providers who assist us in operating our website and conducting our business.</p>
            </li>

            <li class="list-group-item"><strong>4. Data Security</strong>
            <p>We take appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction.</p>
            </li>

            <li class="list-group-item"><strong>5. Changes to This Privacy Policy</strong>
            <p>We reserve the right to update or change our Privacy Policy at any time. Any changes will be effective immediately upon posting on this page.</p>
            </li>

            <li class="list-group-item"><strong>6. Contact Us</strong>
            <p>If you have any questions about our Privacy Policy, please contact us.</p>
            </li>
        </ol>
    </div>
</div>
<!-- privacy end -->

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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>




