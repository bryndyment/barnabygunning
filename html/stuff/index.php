<!DOCTYPE html>
<?php

	?>
<html>
  <head>
    <title>SCUOLE L'AQUILA</title>
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
	    	var pinlets = [
			"https://www.google.com/maps/vt/icon/name=assets/icons/poi/tactile/pinlet_shadow-2-medium.png,assets/icons/poi/tactile/pinlet_outline_v2-2-medium.png,assets/icons/poi/tactile/pinlet-2-medium.png,assets/icons/poi/quantum/pinlet/school_pinlet-2-medium.png&highlight=ff000000,ffffff,444444,ffffff&color=ff000000?scale=1",
			"https://www.google.com/maps/vt/icon/name=assets/icons/poi/tactile/pinlet_shadow-2-medium.png,assets/icons/poi/tactile/pinlet_outline_v2-2-medium.png,assets/icons/poi/tactile/pinlet-2-medium.png,assets/icons/poi/quantum/pinlet/school_pinlet-2-medium.png&highlight=ff000000,ffffff,ffaa00,ffffff&color=ff000000?scale=1",
			"https://www.google.com/maps/vt/icon/name=assets/icons/poi/tactile/pinlet_shadow-2-medium.png,assets/icons/poi/tactile/pinlet_outline_v2-2-medium.png,assets/icons/poi/tactile/pinlet-2-medium.png,assets/icons/poi/quantum/pinlet/school_pinlet-2-medium.png&highlight=ff000000,ffffff,ff8800,ffffff&color=ff000000?scale=1",
			"https://www.google.com/maps/vt/icon/name=assets/icons/poi/tactile/pinlet_shadow-2-medium.png,assets/icons/poi/tactile/pinlet_outline_v2-2-medium.png,assets/icons/poi/tactile/pinlet-2-medium.png,assets/icons/poi/quantum/pinlet/school_pinlet-2-medium.png&highlight=ff000000,ffffff,ff5500,ffffff&color=ff000000?scale=1",
			"https://www.google.com/maps/vt/icon/name=assets/icons/poi/tactile/pinlet_shadow-2-medium.png,assets/icons/poi/tactile/pinlet_outline_v2-2-medium.png,assets/icons/poi/tactile/pinlet-2-medium.png,assets/icons/poi/quantum/pinlet/school_pinlet-2-medium.png&highlight=ff000000,ffffff,ff2200,ffffff&color=ff000000?scale=1",
		];
	    	var map;
		var schools = [
			[4,"Convitto Nazionale","Domenico Cotugno","AQVC050005",42.365952,13.361069,"convittocotugno.gov.it"],
			[4,"IPSIASAR","Leonardo Da Vinci","AQRI007011",42.358953,13.400658,"www.iisdavincicolecchiaq.gov.it"],
			[4,"I.P.C","","AQRC007018",42.356393,13.414203,"www.iisdavincicolecchiaq.gov.it"],
			[4,"I.P.A.A","","AQRA007019",42.356393,13.414203,"www.iisdavincicolecchiaq.gov.it"],
			[4,"Ist. Comprensivo","Gianni Rodari","AQIC83300N",42.357233,13.373621,""],
			[4,"Liceo Artistico","Fulvio Muzi","AQSD01801L",42.356010,13.413246,"www.iisbafile.gov.it"],
			[4,"Istituto Magistrale","Vittorio Emanuele II","AQPM050002",42.366019,13.371653,"www.liceocotugno.it"],
			[4,"I.I.S","Leonardo Da Vinci - Ottavio Colecchi","AQIS007009",42.359009,13.400923,""],
			[4,"I.I.S","A. Bafile","AQIS01800Q",42.356010,13.413246,""],
			[4,"Istituto Superiore","Amedeo d’Aosta","AQIS016004",42.355177,13.412871,""],
			[4,"I.T.C","Luigi Rendina","AQTD01601A",42.352662,13.389673,""],
			[4,"","Amedeo d’Aosta","AQTF01601L",42.355177,13.412871,""],	
			[4,"I.I.S","Elena di Savoia","AQTE01601T",42.355276,13.398108,""],
			[4,"","Ottavio Colecchi","AQTL007012",42.356393,13.414203,""],
			[4,"Liceo Artistico Musicale e Coreutico","","AQSL01000B",42.356393,13.414203,""],
			[4,"Liceo Classico","Domenico Cotugno","AQPC040007",42.366019,13.371653,""],
			[4,"Liceo Scientifico","A. Bafile","AQPS018016",42.356010,13.413246,""],
			[4,"Liceo Scientifico","Amedeo d’Aosta","AQPS01601E",42.355177,13.412871,""],
			[1,"Scuola Infanzia","Arcobaleno","AQAA00403N",42.346882,13.423562],
			[1,"Scuola Infanzia","Peter Pan","AQAA00406R",42.365925,13.452425],
			[1,"Scuola Infanzia","Gianni di Genova","AQAA002098",42.360466,13.413501],
			[1,"Scuola Infanzia","L’Aquila - Coppito","AQAA00609G",42.367481,13.341800],
			[1,"Scuola Infanzia","Carlo Collodi","AQAA00608E",42.360938,13.395393],
			[1,"Scuola Infanzia","L’Albero dai Mille Colori","AQAA00404P",42.357224,13.472680],
			[1,"Scuola Infanzia","L'Aquila - Cansatessa","AQAA00611P",42.366084,13.381976],
			[1,"Scuola Infanzia","L'Aquila - San Sisto","AQAA00604A",42.365718,13.390638],
			[1,"Scuola Infanzia","La Scatola delle Esperienze","AQAA00407T",42.336690,13.446255],
			[1,"Scuola Infanzia","L’Aquila - Pettino","AQAA00610N",42.365254,13.362188],
			[1,"Scuola Infanzia","Preturo","AQAA83306Q",42.377468,13.297907],
			[1,"Scuola Infanzia","L'Aquila - Quart. S. Barbara","AQAA00607D",42.365849,13.382574],
			[1,"Scuola Infanzia","L'Aquila - Pile 1 Maggio","AQAA83304N",42.357218,13.373562],
			[1,"Scuola Infanzia","Pagliare di Sassa","AQAA83305P",42.351608,13.312134],
			[1,"Scuola Infanzia","L'Aquila - Pile","AQAA83302G",42.357218,13.373562],
			[1,"Scuola Infanzia","Pianola MUSP N.5","AQAA83307R",42.328747,13.400169],
			[1,"Scuola Infanzia","S. Bernardino","AQAA002054",42.348881,13.418270],
			[1,"Scuola Infanzia","Colle Capocroce","AQAA002087",42.357671,13.410485],
			[1,"Scuola Infanzia","Giovanni XXIII","AQAA002043",42.361647,13.373602],
			[1,"Scuola Infanzia","C. Mastropietro","AQAA002076",42.360914,13.403456],
			[1,"Scuola Infanzia","San Francesco","AQAA002065",42.361359,13.407526],
			[2,"Scuola Primaria","Casa Circondariale","AQEE70001G",42.364593,13.289444],
			[2,"Scuola Primaria","Pianola MUSP N.5","AQEE833061",42.328747,13.400169],
			[2,"Scuola Primaria","CD Galileo Galilei","AQEE00400Q",42.357156,13.472173],
			[2,"Scuola Primaria","Torretta","AQEE004095",42.346889,13.423504],
			[2,"Scuola Primaria","E de Amicis","AQEE002059",42.348942,13.417824],
			[2,"Scuola Primaria","Mariele Ventre  - Pettino","AQEE006198",42.365254,13.362188],
			[2,"Scuola Primaria","Pile","AQEE83301Q",42.357153,13.37348],
			[2,"Scuola Primaria","Celestino V","AQEE00606N",42.360938,13.395393],
			[2,"Scuola Primaria","Francesco Rossi","AQEE004051",42.357095,13.472294],
			[2,"Scuola Primaria","Arischia","AQEE00601C",42.419143,13.339404],
			[2,"Scuola Primaria","San Sisto","AQEE00605L",42.366007,13.382316],
			[2,"Scuola Primaria","CD Amiternum","AQEE00600B",42.364591,13.363477],
			[2,"Scuola Primaria","Buccio di Ranallo","AQEE00620A",42.367101,13.341559],
			[2,"Scuola Primaria","Santa Barbara","AQEE00604G",42.366046,13.382155],
			[2,"Scuola Primaria","Sassa MUSP n.7","AQEE83302R",42.350909,13.308462],
			[2,"Scuola Primaria","Preturo","AQEE83304V",42.377420,13.298010],
			[2,"Scuola Primaria","Giovanni XXIII","AQEE002048",42.361710,13.373844],
			[2,"Scuola Primaria","Torrione","AQEE00208C",42.358870,13.409558],
			[2,"Scuola Primaria","Gianni di Genova","AQEE00206A",42.360466,13.413501],
			[0,"D.D","Silvestro dell’Aquila","AQEE002004",42.348881,13.418270],
			[1,"Scuola Media","Sassa MUSP n.7","AQMM83301P",42.350933,13.308613],
			[1,"Scuola Media","Dante Alighieri","AQMM001007",42.355177,13.412871],
			[1,"CPIA","L'Aquila","AQMM074001",42.361527,13.375124],
			[1,"","G. Mazzini - T. Patini","AQMM07500R",42.353654,13.370338]
		];
		var centre = [42.351,13.3971];
		function initMap() {
	       		map = new google.maps.Map(document.getElementById('map'), {
          		center: {lat:centre[0], lng:centre[1]},
          		zoom: 14,
          		styles: [{ featureType: 'poi', stylers: [{visibility: 'off'}] }]
			}); 
		
 			var transitLayer = new google.maps.TransitLayer();
  			transitLayer.setMap(map);
			
			var infowindow = new google.maps.InfoWindow({
				maxWidth: 200
			});
			for (i=0; i<schools.length; i++){
				var school = schools[i];
				console.log(school[3]);
				var marker = new google.maps.Marker({
	        			position: {lat: school[4], lng: school[5]},
				 	title: school[1] + school[2],
					icon: pinlets[school[0]]
        			})
			
				marker.addListener('click', function() {
	    			map.setCenter(marker.getPosition());
					infowindow.open(map, marker);
					infowindow.setContent("<div>Hello "+i+"</div>");
				});
				marker.setMap(map);
			}
		}
		
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaSsrqvX1yY-FVcIsfXTqR-MDFgICC7io&callback=initMap"
    async defer></script>
  </body>
</html>
