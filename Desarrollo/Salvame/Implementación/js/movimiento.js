const movPag = document.querySelector(".movPag");
const ventana = document.querySelector(".ventana");
const part2 = document.querySelector(".parte-2");

const btn_adelante2 = document.querySelector(".sigPag2");
const btn_atras1 = document.querySelector(".antPag1");
const btn_adelante3 = document.querySelector(".sigPag3");
const btn_atras2 = document.querySelector(".antPag2");

btn_adelante2.addEventListener("click", function(e){
    e.preventDefault();
    movPag.style.marginTop = "-604px";
    ventana.style.height = "350px";
    ventana.style.margin = "148px auto";
    part2.style.padding = "0px 0px";
});
btn_atras1.addEventListener("click", function(e){
    e.preventDefault();
    movPag.style.marginTop = "0px";
    ventana.style.height = "600px";
    ventana.style.margin = "40px auto";
    part2.style.padding = "20px 20px";
});
btn_adelante3.addEventListener("click", function(e){
    e.preventDefault();
    movPag.style.marginTop = "-950px";
    ventana.style.height = "350px";
    ventana.style.margin = "148px auto";
    part2.style.padding = "0px 0px";
});
btn_atras2.addEventListener("click", function(e){
    e.preventDefault();
    movPag.style.marginTop = "-600px";
    ventana.style.height = "350px";
    ventana.style.margin = "148px auto";
    part2.style.padding = "0px 0px";
});