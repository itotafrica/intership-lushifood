<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
            crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw=="
            crossorigin=""></script>
            <script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var x = document.getElementById("demo");
			function getLocation() {
    			if (navigator.geolocation) {
        			navigator.geolocation.getCurrentPosition(showPosition);
    			} else {
        			x.innerHTML = "Geolocation is not supported by this browser.";
    			}
			}
			function showPosition(position) {
    			var lat= position.coords.latitude;
    			var long=position.coords.longitude
    			var macarte = null;
			// Fonction d'initialisation de la carte
			function initMap() {
				// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
                macarte = L.map('map').setView([lat, lon], 11);
                // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
                L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
                    // Il est toujours bien de laisser le lien vers la source des données
                    attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
                    minZoom: 1,
                    maxZoom: 20
                }).addTo(macarte);
            }
			window.onload = function(){
				// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
				initMap(); 
			};
			function geoloc(){ // ou tout autre nom de fonction
    			var geoSuccess = function(position) { // Ceci s'exécutera si l'utilisateur accepte la géolocalisation
        		startPos = position;
        		userlat = startPos.coords.latitude;
        		userlon = startPos.coords.longitude;
        		console.log("lat: "+userlat+" - lon: "+userlon);
    			};
    		var geoFail = function(){ // Ceci s'exécutera si l'utilisateur refuse la géolocalisation
        	console.log("refus");
    		};
    		// La ligne ci-dessous cherche la position de l'utilisateur et déclenchera la demande d'accord
    		navigator.geolocation.getCurrentPosition(geoSuccess,geoFail);
			}
			
		</script>
		<style type="text/css">
			#map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
				height:400px;
			}
		</style>
		<title>Carte</title>
	</head>
	<body>
		<div id="map">
			<!-- Ici s'affichera la carte -->
		</div>
	</body>
</html>