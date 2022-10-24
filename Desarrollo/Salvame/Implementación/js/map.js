let map;

function initMap() {
    map = new google.maps.Map(document.getElementById("mapDiv"), {
        center: { lat: -12.034662170145047, lng: -77.04546861557782 },

        zoom: 10,
    });
}

window.initMap = initMap;