<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Phillow - Elevate Your Living</title>
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
    <link href="img/favicon.ico" rel="icon">

    <style>
        p, ul, li {
            font-family: Forum,cursive;
        }
        h1, a {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        #slideShow {
            display: flex;
            justify-content: center;
        }
        .top{
            padding-top: 50px;
        }
        .modal-dialog {
    margin: auto;
    top: 25%;
    transform: translateY(-50%);
    max-width: 50%; /* Adjust the maximum width of the modal as needed */
}

.modal-content {
    width: 100%;
}

.modal-body {
    max-height: calc(100vh - 200px); /* Adjust the maximum height of the modal body as needed */
    overflow-y: auto;
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


       <!-- header start -->
@include('header')
<!-- header end -->


        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Elevate <span class="text-primary">Your Living</span> With The Perfect Home</h1>
                    <p class="animated fadeIn mb-4 pb-2">Experience luxury like never before. From exquisite designs to unparalleled comfort, we offer a home tailored to your desires.</p>
                    <a href="{{ url('/register') }}" class="btn btn-primary py-3 px-5 me-3 animated fadeIn">Get Started</a>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3" id="PropertyTypes">Property Types</h1>
                    <p>Discover a diverse range of property types tailored to your preferences and lifestyle. Whether you're seeking a cozy apartment in the heart of the city, a spacious family home in a tranquil suburb, or a luxurious waterfront estate, our listings feature an array of options to suit every taste and need.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-apartment.png" alt="Icon">
                                </div>
                                <h6>Apartment</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-villa.png" alt="Icon">
                                </div>
                                <h6>Villa</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-house.png" alt="Icon">
                                </div>
                                <h6>Home</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-housing.png" alt="Icon">
                                </div>
                                <h6>Office</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-building.png" alt="Icon">
                                </div>
                                <h6>Building</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-neighborhood.png" alt="Icon">
                                </div>
                                <h6>Townhouse</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-condominium.png" alt="Icon">
                                </div>
                                <h6>Shop</h6>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item d-block bg-light text-center rounded p-3" href="{{ url('/propertylistings') }}">
                            <div class="rounded p-4">
                                <div class="icon mb-3">
                                    <img class="img-fluid" src="img/icon-luxury.png" alt="Icon">
                                </div>
                                <h6>Garage</h6>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 animated fadeIn">
                <div class="owl-carousel header-carousel">
                    <!-- Slides content -->
                    @foreach ($properties->take(5) as $property)
    <div class="owl-carousel-item">
        <div class="property-item rounded overflow-hidden">
            <div class="position-relative overflow-hidden">
                <a href="/property/{{ $property->id }}" class="property-link" target="_blank">
                    <img class="img-fluid" src="{{ $property->img_src }}" alt="Property Image">
                </a>
                <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">{{ $property->marketing_status_simplified_cd }}</div>
                <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">{{ $property->raw_home_status_cd }}</div>
            </div>
            <div class="p-4 pb-0">
                <h5 class="text-primary mb-3">${{ number_format($property->price) }}</h5>
                <h5 class="mb-3">{{ $property->address_street }}</h5>
                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $property->city }}, {{ $property->state }}, {{ $property->zipcode }}</p>
            </div>
            <div class="d-flex border-top">
                <small class="sf" class="flex-fill text-center border-end py-2"> <i class="fa fa-ruler-combined text-primary me-2"></i> {{ $property->area }} Sqft&nbsp; </small>
                <small class="bed" class="flex-fill text-center border-end py-2"> <i class="fa fa-bed text-primary me-2"></i> {{ $property->beds }} Bed &nbsp;</small>
                <small class="bath" class="flex-fill text-center py-2"> <i class="fa fa-bath text-primary me-2"></i> {{ $property->baths }} Bath &nbsp;</small>
            </div>
        </div>
    </div>
@endforeach

                </div>
            </div>
        </div>
    </div>
</div>

        <!-- End of Slideshow container -->

        <!-- Modal -->
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

        <!-- footer start -->
        @include('footer')
        <!-- footer end -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
$(document).ready(function() {
    $('.property-link').click(function(event) {
        // Prevent the default behavior of the anchor tag
        event.preventDefault();

        // Retrieve property details from the clicked property element
        var propertyContainer = $(this).closest('.property-item');
        var propertyDetails = propertyContainer.find('.p-4').html(); // Get property description
        var squareFeet = propertyContainer.find('.sf').text().trim(); // Get square feet
        var beds = propertyContainer.find('.bed').text().trim(); // Get number of beds
        var baths = propertyContainer.find('.bath').text().trim(); // Get number of baths
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