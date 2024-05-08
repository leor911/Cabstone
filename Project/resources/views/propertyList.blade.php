<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phillow - Property List</title>
    <!-- Include your CSS and JavaScript links here -->
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
        /* Adjustments to ensure only the right half scrolls */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        .container-fluid {
            display: flex;
            height: 100%;
        }

        .left-column {
            width: 100%;
            height: 100%;
        }

        #map {
            width: 100%;
            height: 100%;
        }

        .right-column {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
            overflow-y: auto;
            height: calc(100vh - 160px); /* Adjusted height */

        }
       

        .property-listings {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 0;
            margin: 0;
            margin-bottom: 120px;
        }

        .property-listings .col {
            flex-basis: calc(33.33% - 20px);
            margin-bottom: 20px;
        }

        .property-item img {
            transition: none !important;
            transform: none !important;
        }

        .footer {
            padding: 20px;
            background-color: #f8f9fa;
        }

        header {
            text-align: center;
            background-color: #fff;
            padding: 10px;
        }

        #foot {
            background-color: #0E2E50;
            bottom: 0;
            z-index: 1;
            margin-left: 5px;
            margin-right: 5px;
            
        }

        .props {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>@include('header')</header>

    <div class="container-fluid">
        <div class="left-column">
            <div id="map"></div>
        </div>
        <div class="right-column">
            <div>
            <div class="container-fluid property-listings">
            <?php
$propertiesArray = json_decode(json_encode($properties), true);
$perPage = 12;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$startIndex = ($currentPage - 1) * $perPage;
$endIndex = min($startIndex + $perPage, count($propertiesArray));
?>
<div class="row">
@for ($i = $startIndex; $i < $endIndex; $i++)
    @if (!empty($properties[$i]->img_src)) <!-- Check if img_src is not empty -->
        <div class="col-md-6">
            <div class="property-item rounded fadeInUp props" data-wow-delay="0.1s">
                <div class="d-flex justify-content-center" style="height: 300px;">
                    <div class="position-relative" class="property-link">
                        <a href="#" class="property-link" data-toggle="modal" data-target="#propertyModal" data-property-id="{{ $properties[$i]->id }}">
                            <img class="p-10 img-fluid" src="{{ $properties[$i]->img_src }}" alt="Property Image">
                        </a>
                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $properties[$i]->marketing_status_simplified_cd }}</div>
                    </div>
                </div>
                <div class="p-4 pb-0 text-center">
                    <h5 class="text-primary mb-3">${{ $properties[$i]->price }}</h5>
                    <h5 class="mb-3">{{ $properties[$i]->address }}</h5>
                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $properties[$i]->address_street }}, {{ $properties[$i]->city }}, {{ $properties[$i]->state }}</p>
                </div>
                <div class="d-flex justify-content-center border-top">
                    <small class="sf flex-fill text-center border-end py-2"><i class="fa fa-ruler-combined text-primary me-2"></i>{{ $properties[$i]->area }} Sqft</small>
                    <small class="bed flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i>{{ $properties[$i]->beds }} Bed</small>
                    <small class="bath flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i>{{ $properties[$i]->baths }} Bath</small>
                </div>
                <!-- Additional property details -->
            </div>
        </div>
    @endif
@endfor


</div>
<!-- Pagination -->
<nav aria-label="Page navigation" class="mt-5">
    <ul class="pagination justify-content-center">
        @php
        $numPages = ceil(count($propertiesArray) / $perPage);
        @endphp
        @for ($i = 1; $i <= $numPages; $i++)
        <li class="page-item @if($currentPage == $i) active @endif"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
        @endfor
    </ul>
</nav>


        </div>
    </div>
                    <div class="row g-5" id="foot">
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
                <!-- Add more footer content -->
                <!-- Example: -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link text-white-50" href="{{ url('/about') }}">About Us</a>
                    <a class="btn btn-link text-white-50" href="{{ url('/contact') }}">Contact Us</a>
                    <a class="btn btn-link text-white-50" href="{{ url('/about') }}#ourServices">Our Services</a>
                    <a class="btn btn-link text-white-50" href="{{url('/termsOfService')}}#privacyPolicy">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="{{url('/termsOfService')}}">Terms & Condition</a>
                </div>
                <!-- Add more footer content -->
                <!-- Example: -->
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Photo Gallery</h5>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                        </div>
                        <!-- Add more images -->
                    </div>
                </div>
                <!-- Add more footer content -->
                <!-- Example: -->
                <div class="col-lg-3 col-md-6 text-center">
                    <a href="{{ url('/') }}" class="navbar-brand d-flex justify-content-center">
                        <img src="img/logo-no-background2.jpg" alt="Logo" style="max-width: 150px; height: auto;">
                    </a>
                </div>
            </div>
        </div>
</div>
                </div>
            </div>
            </div>

            

    <!-- Modal -->
    <div class="modal fade" id="propertyModal" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="propertyModalLabel">Property Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div id="propertyImageCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <!-- Carousel items will be dynamically populated here -->
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#propertyImageCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#propertyImageCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6" id="propertyDetails">
                            <!-- Property details will be dynamically populated here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <!-- Slide Show -->
    <script>
        var map = L.map('map').setView([51.505, -0.09], 13);
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });
        osm.addTo(map);

        $(document).ready(function () {
            $('.property-link').click(function (event) {
                event.preventDefault();

                var propertyContainer = $(this).closest('.property-item');
                var propertyDetails = propertyContainer.find('.p-4').html();
                var squareFeet = propertyContainer.find('.sf').text().trim();
                var beds = propertyContainer.find('.bed').text().trim();
                var baths = propertyContainer.find('.bath').text().trim();
                var imageUrls = propertyContainer.find('.image-list').data('images');

                var detailsHtml = '<p><strong>Beds:</strong> ' + beds + '</p>' +
                    '<p><strong>Baths:</strong> ' + baths + '</p>' +
                    '<p><strong>Square Feet:</strong> ' + squareFeet + '</p>';

                $('#propertyImageCarousel .carousel-inner').empty(); // Clear existing carousel items

                if (imageUrls && imageUrls.length > 0) {
                    $.each(imageUrls, function (index, imageUrl) {
                        var activeClass = index === 0 ? 'active' : '';
                        var carouselItem = '<div class="carousel-item ' + activeClass + '">' +
                            '<img class="d-block w-100" src="' + imageUrl + '" alt="Property Image">' +
                            '</div>';
                        $('#propertyImageCarousel .carousel-inner').append(carouselItem);
                    });
                } else {
                    // If no images are available, display a placeholder
                    var placeholderItem = '<div class="carousel-item active">' +
                        '<img class="d-block w-100" src="img/no-image-placeholder.jpg" alt="No Image Available">' +
                        '</div>';
                    $('#propertyImageCarousel .carousel-inner').append(placeholderItem);
                }

                $('#propertyDetails').html(propertyDetails + detailsHtml);

                $('#propertyModal').modal('show');
            });
        });
    </script>
</body>

</html>
