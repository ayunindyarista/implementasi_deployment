var lat = document.getElementById("lat");
var long = document.getElementById("long");
var acc = document.getElementById("acc");

var map, infoWindow,geocoder,marker,accuracyStatus;

function getLocation() {

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
    
function showPosition(position) {
    lat.value=position.coords.latitude;
    long.value=position.coords.longitude;
    acc.value=position.coords.accuracy;
}
