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
        p, ul, li {
            font-family: Forum, cursive;
            margin: 10px 0; /* Add margin for spacing between paragraphs and list items */
        }
        h1, a {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
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
            height: 83%;
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
        #pac-input {
            position: absolute;
            margin-top: 1%; /* Adjust top position as needed */
            margin-left: 20%; /* Adjust left position as needed */
            z-index: 1000; /* Ensure search bar is above other elements */
        }

        #pagnation{
            margin-left: 50%;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>@include('header')</header>

    <div class="container-fluid">
        <div class="left-column">
        <input id="pac-input" class="controls" type="text" placeholder="Search Box" />
            <div id="map"></div>
        </div>
        <div class="right-column">
            <div>
            <div class="container-fluid property-listings">
            <?php
$propertiesArray = json_decode(json_encode($properties), true);
$perPage = 10;
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
                <h5 class="text-primary mb-3 pt-2">${{ number_format($properties[$i]->price) }}</h5>
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
<nav aria-label="Page navigation" class="mt-5" id="pagnation">
    <ul class="pagination justify-content-center">
        @php
        $numPages = ceil(count($propertiesArray) / $perPage);
        // Adjusting numPages to the maximum possible value
        $numPages = 2;
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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>5820 E W.T. Harris Blvd, Charlotte, NC 28215</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(704)-989-0987</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>phillowphillow1@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/channel/UCBZ7dKiwCwSMY8jtZBMfayQ"><i class="fab fa-youtube"></i></a>
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
                    <a class="btn btn-link text-white-50" href="{{url('/termsOfService')}}">Terms & Conditions</a>
                </div>
                <!-- Add more footer content -->
                <!-- Example: -->
                <div class="col-lg-3 col-md-6 text-center">
                    <a href="{{ url('/') }}" class="navbar-brand d-flex justify-content-center">
                        <img src="img/logo-no-background2.jpg" alt="Logo" style="max-width: 150px; height: auto;">
                    </a>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; 2024 Phillow, All Rights Reserved. 
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
                </div>
            </div>
            </div>

            

    <!-- Modal -->
    <!-- Modal -->
<div class="modal fade" id="propertyModal" tabindex="-1" aria-labelledby="propertyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Centered modal dialog -->
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
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC92z665c3Q4ymF4mB8MmXRsSJ9uIrDOIA&callback=initAutocomplete&libraries=places&v=weekly" defer></script>

<!-- JavaScript code for Places Search Box -->
<script>
  // Initialize the Places Search Box
  function initAutocomplete() {
    const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 40.12150192260742, lng: -100.45039367675781 },
      zoom: 5,
      mapTypeId: "roadmap",
    });
    
    // Create the search box and link it to the UI element.
    const input = document.getElementById("pac-input");
    const searchBox = new google.maps.places.SearchBox(input);

    // Bias the SearchBox results towards current map's viewport.
    map.addListener("bounds_changed", () => {
      searchBox.setBounds(map.getBounds());
    });

    let markers = [];

    // Listen for the event fired when the user selects a prediction and retrieve
    // more details for that place.
    searchBox.addListener("places_changed", () => {
      const places = searchBox.getPlaces();

      if (places.length == 0) {
        return;
      }

      // Clear out the old markers.
      markers.forEach((marker) => {
        marker.setMap(null);
      });
      markers = [];

      // For each place, get the icon, name, and location.
      const bounds = new google.maps.LatLngBounds();

      places.forEach((place) => {
        if (!place.geometry || !place.geometry.location) {
          console.log("Returned place contains no geometry");
          return;
        }

        // Create a marker for each place with address as the title.
        const marker = new google.maps.Marker({
          map,
          title: place.formatted_address,
          position: place.geometry.location,
        });

        // Push the marker to the markers array.
        markers.push(marker);

        if (place.geometry.viewport) {
          // Only geocodes have viewport.
          bounds.union(place.geometry.viewport);
        } else {
          bounds.extend(place.geometry.location);
        }
      });
      map.fitBounds(bounds);
    });
  }
</script>
</body>

</html>
