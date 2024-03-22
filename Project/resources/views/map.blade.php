<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phillow - Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin=""/>
    <style>
        .text-center{
            text-align: center;
        }
        #map{
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Laravel Leaflet Maps</h1>
    <div id="map"></div>
</body>
 <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
 integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
 crossorigin="">
 </script>
<script>
    let map;
    function initMap(){
        map = L.map('map', {
            center: [40.037, -76.28],
            zoom: 15
        });
        
        L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    }
    initMap();
    var marker = L.marker([40.041, -76.27]).addTo(map);
    marker.bindPopup("<b>Thaddeus Stevens!</b><br>Here's a popup.").openPopup();
    
    var popup = L.popup();
    function onMapClick(e){
        popup
            .setLatLng(e.latlng)
            .setContent("You clicked the map at " + e.latlng.toString())
            .openOn(map);
    }
    map.on('click', onMapClick);

</script>

</html>