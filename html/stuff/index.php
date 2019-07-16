<!DOCTYPE html>
<?php

	?>
<html>
  <head>
    <title>HEY BRYN - I'm changing this at 11:10 UK Time!</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      var block = Array('1', 'ClickDay 01', '42.351', '13.3971', '42.352131,13.39682;42.351372,13.39844;42.350719,13.39997;42.3489,13.39908;42.3493,13.39793;42.35059,13.39566;42.350971,13.395944;42.351234,13.39529;42.351311,13.39529;42.352032,13.3967;42.352131,13.39682', '0', 'Zones', 'v');

      function initMap() {
	     var latitude = parseFloat(block[2]);
		 var longitude = parseFloat(block[3]);
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat:latitude, lng:longitude},
          zoom: 16
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaSsrqvX1yY-FVcIsfXTqR-MDFgICC7io&callback=initMap"
    async defer></script>
  </body>
</html>
