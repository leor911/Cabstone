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
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC92z665c3Q4ymF4mB8MmXRsSJ9uIrDOIA&language=en&loading=async&callback=initMap" defer></script>
    <script>
        (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
          key: "AIzaSyC92z665c3Q4ymF4mB8MmXRsSJ9uIrDOIA",
          v: "beta",
        });
      </script>
    <script>
        // Define initMap function in the global scope
        async function initMap() {
            const { Map } = await google.maps.importLibrary("maps");
            const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");
            const {Place} = await google.maps.importLibrary("places");
            const map = new Map(document.getElementById('map'), {
                center: { lat: 40.4220656, lng: -100.0840897 },
                zoom: 5,
                mapId: 'f2f5648b7f4b4ed'
            });
            @foreach ($houses as $house)
            new AdvancedMarkerElement({
                map,
                position: {lat: {{ $house->latitude }}, lng: {{ $house->longitude }}},
            });
            @endforeach
        }
    </script>
</body>
</html>
