let map
let marcadores
let geocoder
var select = document.getElementById('departamento');


$.ajax({
    dataType: 'json',
    url: "marcadores.php",
    success: function (data) {
        marcadores = data;
        window.initMap() = initMap;
    }

});

function initMap() {
    //Ubicacion de lima
    geocoder = new google.maps.Geocoder();
    const LatLng = {
        lat: -12.034662170145047,
        lng: -77.04546861557782
    }
    // creando mapa centrado en lima
    map = new google.maps.Map(document.getElementById("mapa"), {
        zoom: 6,
        center: LatLng,
    });
    llenarmapa(marcadores);
};

function llenarmapa(marcadores) {
    //recorriendo el objeto json
    for (let item of marcadores) {
        //cargando coordenadas
        const coord = {
            //convirtiendo de strign a float
            lat: parseFloat(item.latitud),
            lng: parseFloat(item.longitud)
        }
        //creando info de la ventanas de info xd
        const stringcontent = '<div class="info_content">' +
            '<h1>' + item.categoria_animal + '</h1>' +
            '<h2>' + item.fecha + '</h2>' +
            '<p>' + item.descri_animal + '</p>' +
            '</div>';

        const info = new google.maps.InfoWindow();
        //ccreando marcadores
        const marker = new google.maps.Marker({
            position: coord,
            map: map,
            title: item.categoria_animal,
        });
        marker.addListener("click", () => {
            info.setContent(stringcontent);
            info.open({
                anchor: marker,
                map,
            });
        });
    }
}
//para captar los cambios del select de departamentos
select.addEventListener('change', function () {
    //recibe la region seleccionada
    var selectedOption = this.options[select.selectedIndex];
    //formatea la region seleccionada
    if ((selectedOption.text == "Regiones") || (selectedOption.text == "Todas")) {
        var direccion = 'Peru';
        var zoom = 6;
    }
    else {
        var direccion = selectedOption.text + 'Peru';
        var zoom = 8;
    }

    geocoder.geocode({ 'address': direccion }, function (results, status) {
        if (status == 'OK') {
            map.setCenter(results[0].geometry.location);
            map.setZoom(zoom);
        }
        else {
            console.log('Fallo la geoocodificacion razon: ' + status);
        }
    });
});


