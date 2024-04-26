<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Map</title>
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>
<body>
    <!-- Map container -->
    <div id="map"></div>

    <!-- Load Google Maps JavaScript API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC92z665c3Q4ymF4mB8MmXRsSJ9uIrDOIA&callback=initMap" async defer></script>
    
    <script>
        // Define initMap function in the global scope
        function initMap() {
            const map = new google.maps.Map(document.getElementById('map'), {
                center: { lat: 37.4220656, lng: -122.0840897 },
                zoom: 10
            });
        }
    </script>
</body>
</html>
