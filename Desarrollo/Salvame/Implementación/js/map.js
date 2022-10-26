let map;
let marker;
let watchID;
let geoLoc;
let latitud;
let longitud;

//const botonAnterior = document.querySelectorAll(".boton-capturar");
function initMap() {
    const LatLng = { lat: -12.034662170145047, lng: -77.04546861557782 }
    map = new google.maps.Map(document.getElementById("mapDiv"), {
        center: LatLng,
        zoom: 10,
    });
    marker = new google.maps.Marker({
        position: LatLng,
        map,
        draggable: true,
        title: "Marcador prueba"
    });
    getPosition();
    // javascript_to_php();
}
function getPosition() {
    //si el navegador soporta la geolocalizacion
    if (navigator.geolocation) {
        //cantidad de milisegundos en la que se tarda para ejecutar la funcion asiganda
        var options = { tiemout: 60000 };
        //devuelve un objeto geolocation que proporciona acceso web a la ubciacion del dispositivo
        geoLoc = navigator.geolocation;
        //watchPosition ejecuta la funcion asiganda showLocationOnMap 
        watchID = geoLoc.watchPosition(showLocationOnMap, errorHandler, options);
    } else {
        alert("El navegador no soporta la geolocalización");
    }
}
function showLocationOnMap(position) {
    latitud = position.coords.latitude;
    longitud = position.coords.longitude;
    console.log("latitud: " + latitud + "Longitud: " + longitud);

    const LatLng = { lat: latitud, lng: longitud };
    marker.setPosition(LatLng);
    map.setCenter(LatLng);
}
function errorHandler() {
    if (errorHandler.code == 1) {
        alert("Error: Acceso denegado");
    }
    else if (errorHandler.code == 2) {
        alert("Error: No se ecnuentra la posicion");

    }
}
function js_to_php_coords() {
    latitud = marker.getPosition().lat();
    longitud = marker.getPosition().lng();
    $(document).ready(function () {
        var latp = latitud;
        var lonp = longitud;
        alert(latitud + longitud);
        $("#dibujo").load("generaralertas.php", { latp, lonp });
    });

    // $.post('./moduloAlerta.php', { lati: latitud, longi: longitud }, function (data) {
    //     if (data != null) {
    //         alert("Los datos se enviaron correctamente");
    //     } else {
    //         alert("Los datos no se enviaron");
    //     }
    // });
}
window.initMap = initMap;
document.addEventListener("DOMContentLoaded", function () {
    function capturarUbicación() {
        latitud = marker.getPosition().lat();
        longitud = marker.getPosition().lng();
        var cadena = `Latitud: ${latitud}<br>Longitud: ${longitud}`;
        document.getElementById("resultado-ubicacion").innerHTML = `<p>${cadena}</p>`;
    }

    document.getElementById("dibujo").onclick = function () {
        capturarUbicación();
        js_to_php_coords();

    }
})



