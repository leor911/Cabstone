<!DOCTYPE html>
<html>
<head>
  <title>Places Search Box with Simple Marker</title>
  <!-- Import necessary stylesheets -->
  <style>
    /* Ensure the map fills the entire window */
    #map {
      height: 100%;
    }
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
    /* Style for the search box */
    #pac-input {
      position: absolute;
      top: 6%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 300px; /* Adjust the width as needed */
      height: 40px; /* Adjust the height as needed */
      padding: 10px;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
      font-size: 16px;
      z-index: 1;
    }
  </style>
</head>
<body>
  <!-- Add the search box input -->
  <input id="pac-input" class="controls" type="text" placeholder="Search Box" />

  <!-- Create a container for the map -->
  <div id="map"></div>

  <!-- Load Google Maps JavaScript API with the callback to initAutocomplete -->
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