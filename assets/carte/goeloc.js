function Geo(position){
    var lat = position.coords.latitude;
    var lon = position.coords.longitude;

    document.getElementById('Latitude').innerHTML = lat;
    document.getElementById('Longitude').innerHTML = lon;

}
function erreurGeo(erreur){
    var msg;
    switch(erreur.code){
        case erreur.TIMEOUT:
            msg = 'le temps de la requete a expire';
        break;
        case erreur.UNKNOWN_ERROR:
            msg = 'Une erreur inconnue s\'est produite';
        break;
        case erreur.POSITION_INVAILABLE:
            msg = 'Une erreur technique s\'est produite';
        break;
        case erreur.POSITION_DENIED:
            msg = 'vous avez refuse la geolocalisation';
        break;

    }

}

if(Navigator.geolocation){
    Navigator.geolocation.getCurrentPosition(Geo,erreurGeo);
}
else(){

}
UNKNOWN_ERROR 
POSITION_DENIED
POSITION_INVAILABLE
TIMEOUT 