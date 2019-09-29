<!DOCTYPE html>
<?php

	?>
<html>
  <head>
    <title>REVISION 10:45 28/09/19</title>
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
	    	var pinlet = "https://www.google.com/maps/vt/icon/name=assets/icons/poi/tactile/pinlet_shadow-2-medium.png,assets/icons/poi/tactile/pinlet_outline_v2-2-medium.png,assets/icons/poi/tactile/pinlet-2-medium.png,assets/icons/poi/quantum/pinlet/school_pinlet-2-medium.png&highlight=ff000000,ffffff,7b9eb0,ffffff&color=ff000000?scale=1";
	    	var map;
		var schools = [
			["Convitto Nazionale","Domenico Cotugno","AQVC050005",42.365952,13.361069,"convittocotugno.gov.it"],
			["IPSIASAR","Leonardo Da Vinci","AQRI007011",42.358953,13.400658,"www.iisdavincicolecchiaq.gov.it"],
			["I.P.C","","AQRC007018",42.356393,13.414203,"www.iisdavincicolecchiaq.gov.it"],
			["I.P.A.A","","AQRA007019",42.356393,13.414203,"www.iisdavincicolecchiaq.gov.it"],
			["Ist. Comprensivo","Gianni Rodari","AQIC83300N",42.357233,13.373621,""],
			["Liceo Artistico","Fulvio Muzi","AQSD01801L",42.356010,13.413246,"www.iisbafile.gov.it"],
			["Istituto Magistrale","Vittorio Emanuele II","AQPM050002",42.366019,13.371653,"www.liceocotugno.it"],
			["I.I.S","Leonardo Da Vinci - Ottavio Colecchi","AQIS007009",42.359009,13.400923,""],
			["I.I.S","A. Bafile","AQIS01800Q",42.356010,13.413246,""],
			["Istituto Superiore","Amedeo d’Aosta","AQIS016004",42.355177,13.412871,""],
			["I.T.C","Luigi Rendina","AQTD01601A",42.352662,13.389673,""],
			["","Amedeo d’Aosta","AQTF01601L",42.355177,13.412871,""],	
			["I.I.S","Elena di Savoia","AQTE01601T",42.355276,13.398108,""],
			["","Ottavio Colecchi","AQTL007012",42.356393,13.414203,""],
			["Liceo Artistico Musicale e Coreutico","","AQSL01000B",42.356393,13.414203,""],
			["Liceo Classico","Domenico Cotugno","AQPC040007",42.366019,13.371653,""],
			["Liceo Scientifico","A. Bafile","AQPS018016",42.356010,13.413246,""],
			["Liceo Scientifico","Amedeo d’Aosta","AQPS01601E",42.355177,13.412871,""]
		];
		var centre = [42.351,13.3971];
		function initMap() {
	    		var latitude = parseFloat(block[2]);
			var longitude = parseFloat(block[3]);
	       		map = new google.maps.Map(document.getElementById('map'), {
          		center: {lat:centre[0], lng:centre[1]},
          		zoom: 14,
          		styles: [{ featureType: 'poi', stylers: [{visibility: 'off'}] }]
			}); 
		
			for (i=0; i<schools.length; i++){
				var school = schools[i];
				console.log(school[2]);
				var marker = new google.maps.Marker({
	        			position: {lat: school[3], lng: school[4]},
				 	title: school[2],
					icon: pinlet
        			})
				marker.setMap(map);
			}
		}
		
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaSsrqvX1yY-FVcIsfXTqR-MDFgICC7io&callback=initMap"
    async defer></script>
  </body>
</html>
