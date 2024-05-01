<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Map</title>
    <style>
        #map {
            height: 900px;
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
        async function initMap() {
            const { Map } = await google.maps.importLibrary("maps");
            map = new Map(document.getElementById('map'), {
                center: { lat: 40.4220656, lng: -100.0840897 },
                zoom: 5,
                mapId: "f2f5648b7f4b4ed"
            });
        }
        initMap();
    </script>
</body>
</html>