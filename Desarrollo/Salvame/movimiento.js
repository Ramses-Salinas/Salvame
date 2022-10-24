const movPag = document.querySelector(".movPag");

const btn_adelante3 = document.querySelector(".sigPag3");

const btn_atras2 = document.querySelector(".antPag2");

btn_adelante3.addEventListener("click", function(e){
    e.preventDefault();
    movPag.style.marginTop = "-350px";
});
btn_atras2.addEventListener("click", function(e){
    e.preventDefault();
    movPag.style.marginTop = "0px";
});