const botonAnterior = document.querySelectorAll(".boton-anterior");
const botonSiguiente = document.querySelectorAll(".boton-siguiente");
const progreso = document.getElementById("progreso");
const pasosFormulario = document.querySelectorAll(".paso-formulario");
const pasosProgreso = document.querySelectorAll(".paso-progreso");

let cantidadPasos = 0;
let ultimalectura = 0;

botonSiguiente.forEach((boton) => {
    boton.addEventListener("click", () => {
        cantidadPasos++;
        actualizarPasosFormulario();
        actualizarBarraProgreso();
    });
});

botonAnterior.forEach((boton) => {
    boton.addEventListener("click", () => {
        cantidadPasos--;
        actualizarPasosFormulario();
        actualizarBarraProgreso();
    });
});

function actualizarPasosFormulario() {
    /*pasosFormulario.forEach((paso) => {
        paso.classList.contains("paso-formulario-activo");
        paso.classList.remove("paso-formulario-activo");
    });
    */
    if (cantidadPasos > ultimalectura) {
        pasosFormulario[cantidadPasos - 1].classList.remove("paso-formulario-activo");
        pasosFormulario[cantidadPasos].classList.add("paso-formulario-activo");
    } else {
        pasosFormulario[cantidadPasos].classList.add("paso-formulario-activo");
        pasosFormulario[cantidadPasos + 1].classList.remove("paso-formulario-activo");
    }
    ultimalectura = cantidadPasos;
}

function actualizarBarraProgreso() {
    pasosProgreso.forEach((pasosProgreso, indice) => {
        if (indice < cantidadPasos + 1) {
            pasosProgreso.classList.add("paso-progreso-activo");
        } else {
            pasosProgreso.classList.remove("paso-progreso-activo");
        }
        console.log(indice)
    });

    const progresoActivo = document.querySelectorAll(".paso-progreso-activo");

    progreso.style.width = ((progresoActivo.length - 1) / (pasosFormulario.length - 1)) * 100 + "%";
}

console.log(cantidadPasos)