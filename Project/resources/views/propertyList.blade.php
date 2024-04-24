<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phillow - Property List</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <style>
        #map {
            width: 100%;
            height: 100vh;
        }

        p,
        ul,
        li {
            font-family: Forum, cursive;
        }

        h1,
        a {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }


    </style>

</head>

<body>
    <!-- Header -->
    @include('header')

    <div class="container-fluid">
        <div class="row">
            <!-- Map section -->
            <div class="col-md-6 p-0">
                <div id="map"></div>
            </div>
            <!-- Property listings section -->
            <div class="col-md-6">
                <div class="container-fluid property-listings">
                    <!-- Property listings go here -->
                    @foreach ($listings as $listing)
                    <div class="col">
                        <div class="property-item rounded  wow fadeInUp" data-wow-delay="0.1s">
                            <div class="position-relative ">
                                <a href="#" class="property-link" data-toggle="modal" data-target="#propertyModal" data-property-id="{{ $listing->houseID }}">
                                    <img class="img-fluid" src="img/appartment1.jpg" alt="Property Image">
                                </a>
                                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $listing->listingType }}</div>
                                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $listing->homeType }}</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="text-primary mb-3">${{ $listing->price }}</h5>
                                <h5 class="mb-3">{{ $listing->description }}</h5>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $listing->street }}, {{ $listing->city }}, {{ $listing->state }}</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="sf flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{ $listing->squareFeet }} Sqft</small>
                                <small class="bed flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{ $listing->bedroomNo }} Bed</small>
                                <small class="bath flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{ $listing->bathNo }} Bath</small>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <footer>
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
                        <img src="img/logo-no-background2.jpg" alt="Logo" style="max-width: 150px; height: auto;">
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Phillow</a>, All Right Reserved. <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
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
</footer>
            </div>
        </div>
    </div>

    <!-- Property Details Modal -->
    <div class="modal fade" id="propertyModal" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="propertyModalLabel">Property Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Property image -->
                            <div id="propertyImage"></div>
                        </div>
                        <div class="col-md-6">
                            <!-- Property description -->
                            <div id="propertyDescription"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);
    </script>
    <script>
        $(document).ready(function() {
            $('.property-link').click(function(event) {
                // Prevent the default behavior of the anchor tag
                event.preventDefault();

                // Retrieve property details from the clicked property element
                var propertyContainer = $(this).closest('.property-item');
                var propertyDetails = propertyContainer.find('.p-4').html(); // Get property description
                var squareFeet = propertyContainer.find('.text-center:first-child').text().trim(); // Get square feet
                var beds = propertyContainer.find('.text-center:nth-child(2)').text().trim(); // Get number of beds
                var baths = propertyContainer.find('.text-center:last-child').text().trim(); // Get number of baths
                var imageUrl = propertyContainer.find('img').attr('src');

                // Debugging: Print retrieved data to console
                console.log("Square Feet: ", squareFeet);
                console.log("Beds: ", beds);
                console.log("Baths: ", baths);

                // Construct the HTML for the property details
                var detailsHtml = '<p><strong>Beds:</strong> ' + beds + '</p>' +
                                  '<p><strong>Baths:</strong> ' + baths + '</p>' +
                                  '<p><strong>Square Feet:</strong> ' + squareFeet + '</p>';

                // Populate modal body with property details
                $('#propertyImage').html('<img class="img-fluid" src="' + imageUrl + '" alt="Property Image">');
                $('#propertyDescription').html(propertyDetails + detailsHtml);

                // Show the modal
                $('#propertyModal').modal('show');
            });
        });
    </script>
</body>

</html>