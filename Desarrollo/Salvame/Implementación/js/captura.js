

function capturarUbicación() {
    alert("a");
    document.getElementById("resultado-ubicacion").innerHTML = "latitud" + lat + "longitud" + lng;
}
document.getElementById("dibujo").onclick = function () {
    capturarUbicación();
}