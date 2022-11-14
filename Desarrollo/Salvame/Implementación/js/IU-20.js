
let seleccionado = "";


document.addEventListener("keyup",e =>{
    if(e.target.matches("#buscador")){
        document.querySelectorAll(".card").forEach(card =>{
            //console.log(e.target.value);
            switch(seleccionado){
                case "":
                case "Familia":
                    if(card.querySelector(".card__title").textContent.toLowerCase().includes(e.target.value.toLowerCase())){
                        card.style.display = "block";
                    }else{
                        card.style.display = "none";
                    }
                    break;
                case "Especie":
                    if(card.querySelector(".card__especie").textContent.toLowerCase().includes(e.target.value.toLowerCase())){
                        card.style.display = "block";
                    }else{
                        card.style.display = "none";
                    }
                    break;
                case "Zona":
                    if(card.querySelector(".card__zona").textContent.toLowerCase().includes(e.target.value.toLowerCase())){
                        card.style.display = "block";
                    }else{
                        card.style.display = "none";
                    }
                    break;
            }
        })
    }
})



function seleccionarOpcion(){
    let seleccionar = document.getElementById('seleccionar');
    seleccionado = seleccionar.value;
    e.target.value = "";
    //console.log(seleccionado=="Familia")
}