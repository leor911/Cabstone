<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phillow - Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" crossorigin=""/>
    
    <style>
        .text-center {
            text-align: center;
        }
        #map {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1 class="text-center">Laravel Leaflet Maps</h1>
    <div id="map"></div>
</body>

<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" crossorigin=""></script>
<script src="https://unpkg.com/leaflet-search@2.9.14/src/leaflet-search.js"></script>

<script>
    var map = L.map('map', {
        center: [40.037, -76.28],
        zoom: 9
    });

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);
    
    var searchControl = new L.Control.Search({
        position: 'topright',
        layer: searchLayer,
        propertyName: 'houseID'
    });
    map.addControl(searchControl);

    @foreach ($houses as $house)
    var marker = L.marker([{{ $house->coordinateLongitude }}, {{ $house->coordinateLatitude }}]).addTo(map);
    marker.bindPopup("{{ $house->coordinateLongitude }}, {{ $house->coordinateLatitude }}");
    @endforeach
</script>
</html>
