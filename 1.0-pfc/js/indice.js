let nav = document.querySelector("nav");
let menu = document.getElementById("btn");
let close = document.getElementById("cancel");
let hastac = document.getElementById("esconder");

//Para evitar que el menú se descuadre
menu.addEventListener("click", function(e) {
    //e.preventDefault();
    document.body.style.overflow="hidden";
    //document.querySelector("header").style.marginBottom="500px";
});
close.addEventListener("click", function(e) {
    //e.preventDefault();
    document.body.style.overflow="scroll";
    //document.querySelector("header").style.marginBottom="0px";
});

//Organización de las destacadas
document.addEventListener("DOMContentLoaded", function(e) {

    let descripciones = document.querySelectorAll('.descripcion');

    let alturas = [];
    let alturaMaxima = 0;

    const aplicarAlturas = (function aplicarAlturas() {

        descripciones.forEach(descripcion => {
            if(alturaMaxima == 0) {
                alturas.push(descripcion.clientHeight);
            } else {
                descripcion.style.height = `${alturaMaxima}px`;
            }
        });

        return aplicarAlturas;
    
    })();

    alturaMaxima = Math.max.apply(Math, alturas);

    aplicarAlturas();

});