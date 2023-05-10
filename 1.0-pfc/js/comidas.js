//Creamos arrays para cada imagen, título y descripcion
let arrayTitulo = [
    "Croissants", 
    "Empanadas", 
    "Bocadillos de jamón y queso", 
    "Galletas saladas", 
    "Hummus y crudités", 
    "Mini quiches", 
    "Aceitunas", 
    "Patatas fritas", 
    "Tostadas de aguacate", 
    "Tostadas de salmón ahumado",
    "Bolitas de queso",
    "Tostadas de jamón y queso",
    "Rollitos de primavera", 
    "Patatas bravas", 
    "Mini pizzas", 
    "Macarons", 
    "Bruschetta", 
    "Galletas de chocolate", 
    "Magdalenas", 
    "Tostadas de aguacate con tomate de la huerta", 
    "Brownies", 
    "Bizcochos",
    "Coffee chips",
    "Empanadillas de carne"
];

let arrayImagenes = [
    "/pfc/img/comidas/croissant.jfif",
    "/pfc/img/comidas/empanadas.jfif",
    "/pfc/img/comidas/jamonqueso.jfif",
    "/pfc/img/comidas/saladas.webp",
    "/pfc/img/comidas/humus.jfif",
    "/pfc/img/comidas/quiches.jfif",
    "/pfc/img/comidas/aceitunas.jfif",
    "/pfc/img/comidas/patatas.jpg",
    "/pfc/img/comidas/tostadasAguacate.jpg",
    "/pfc/img/comidas/salmon.webp",
    "/pfc/img/comidas/bolasQuesp.avif",
    "/pfc/img/comidas/tostadasQueso.jfif",
    "/pfc/img/comidas/primavera.jfif",
    "/pfc/img/comidas/bravas.jpg",
    "/pfc/img/comidas/miniPizzas.jpg",
    "/pfc/img/comidas/macarons.jfif",
    "/pfc/img/comidas/bursheta.avif",
    "/pfc/img/comidas/galletasChocolate.jpg",
    "/pfc/img/comidas/magdalenas.jpg",
    "/pfc/img/comidas/tostadasAguacate2.webp",
    "/pfc/img/comidas/brownies.jfif",
    "/pfc/img/comidas/bizcochos.jpg",
    "/pfc/img/comidas/fritasCafe.jfif",
    "/pfc/img/comidas/empanadillasCarne.jfif",
];

let arrayDescripcion = [
    "Un clásico aperitivo francés en forma de media luna hecho de masa hojaldrada y con un relleno de mantequilla",
    "Un aperitivo salado latinoamericano que consiste en una masa rellena de carne, verduras, queso o una combinación de estos ingredientes",
    "Un aperitivo salado simple y clásico hecho con jamón y queso en un pan suave y fresco",
    "Una alternativa saludable a los aperitivos fritos que puede incluir opciones como galletas de queso, galletas de semillas, galletas de hierbas, entre otras",
    "Una opción saludable de aperitivo que incluye vegetales crudos como zanahorias, pepinos y apio, junto con una salsa de hummus",
    "Una versión en miniatura de la popular tarta salada francesa, rellena con ingredientes como queso, jamón, espinacas, champiñones, entre otros",
    "Un aperitivo salado clásico que viene en una variedad de sabores y tamaños",
    "Un aperitivo salado popular que se puede servir en diferentes tamaños y estilos, como papas fritas regulares, papas fritas con queso, papas fritas con bacon, entre otros",
    "Un aperitivo salado y saludable que consiste en una rebanada de pan tostado con puré de aguacate encima y sazonado con sal y pimienta",
    "Una opción elegante y deliciosa de aperitivo salado que consiste en una rebanada de pan tostado con salmón ahumado encima y una capa de queso crema",
    "Una opción fácil y sabrosa de aperitivo que consiste en pequeñas bolas de queso mezcladas con especias y otros ingredientes",
    "Una versión en miniatura del popular sándwich de jamón y queso",
    "Un aperitivo asiático hecho con una envoltura de papel de arroz rellena de verduras, carne o mariscos",
    "Un aperitivo español hecho de patatas fritas servidas con una salsa picante de tomate y ajo",
    "Una opción deliciosa y fácil de aperitivo que puede ser hecha con una variedad de ingredientes, desde queso y pepperoni hasta verduras asadas y champiñones",
    "Un aperitivo dulce y elegante hecho con dos pequeñas galletas de almendra pegadas juntas con un relleno de mermelada o crema",
    "Rebanadas de pan tostado, rebozadas con algún ajo y puestas a la parrilla para que se doren",
    "Galletas recubiertas con pepitas de chocolate, dando un sabor mas dulce y recordando el aroma a cacao",
    "Dulce esponjoso recubierto con una capa glass de azucar y endulzadando la masa madre",
    "Tostadas recubiertas de aguacate, sal, aceite y una hoja de perejil junto con un tomate de la huerta",
    "pastelito similar al bizcocho, pero añadiendo mucho más chocolate y con pepitas por dentro",
    "Dulce esponjoso con un tamaño superior al de las magdalenas",
    "Patatas fritas recubiertas con un sabor a café y enbadurnadas con leche, tostandolas y dando ese sabor único",
    "Empanadillas recubiertas con carne en su interior y verduritas",
];

arrayTitulo.forEach((titulo, i) => {
    let contenedorProducto = document.createElement("div");
    contenedorProducto.setAttribute("class", "contenedorProducto");
    contenedorProducto.setAttribute("id", "contenedorProducto"+i);
    document.querySelector(".prod").appendChild(contenedorProducto);
    contenedorProducto.innerHTML=`
        <div class="producto" id="producto${i}" data-modal="modal${i}">
            <img src="${arrayImagenes[i]}" width="150px" height="150px">
            <p>${titulo}</p>
        </div>
        <div id="modal${i}" class="ventana-modal">
            <div class="contenido-ventana-modal">
                <div id="cabezeraModal">
                    <span class="cerrar" id="cerrar${i}">&times;</span>
                    <h3>${titulo}</h3>
                </div>
                <img src="${arrayImagenes[i]}" width="150px" height="150px">
                <p>${arrayDescripcion[i]}</p>
            </div>
        </div>
    `;
});

const productos = document.querySelectorAll('.producto');

productos.forEach((producto)=> {
    producto.addEventListener('click', () => {
        const modal = document.getElementById(producto.dataset.modal);
        modal.style.display = 'block';

        const btnClose = modal.querySelector('.cerrar');
        btnClose.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    });
});