//Creamos arrays para cada imagen, título y descripcion
let arrayTitulo = [
    /*****Cafés*******/
    "Espresso", 
    "Americano", 
    "Latte", 
    "Cappuccino", 
    "Mocha", 
    "Macchiato", 
    "Flat white", 
    "Frappuccino", 
    "Café con leche", 
    "Espresso Doble",
    "Affogato",
    "Irish Coffee",
    /*****Infusiones*******/
    "Té verde", 
    "Té negro", 
    "Té de jengibre", 
    "Té de manzanilla", 
    "Té de menta", 
    "Té de rooibos", 
    "Té de frutas", 
    "Té de hibisco", 
    "Té de cúrcuma", 
    "Té de hierbas",
    "Té de oolong",
    "Té chai"
];

let arrayImagenes = [
    /********Cafés************/
    "/pfc/img/bebidas/expresso.jpg",
    "/pfc/img/bebidas/americano.jfif",
    "/pfc/img/bebidas/latte.jpg",
    "/pfc/img/bebidas/capuccino.webp",
    "/pfc/img/bebidas/mocha.jfif",
    "/pfc/img/bebidas/macchiato.webp",
    "/pfc/img/bebidas/flatWhite.jfif",
    "/pfc/img/bebidas/frappuccino.jfif",
    "/pfc/img/bebidas/cafeLeche.jfif",
    "/pfc/img/bebidas/expressoDoble.jfif",
    "/pfc/img/bebidas/affogato.jfif",
    "/pfc/img/bebidas/irishCoffee.webp",
    /********Infusiones & tes***********/
    "/pfc/img/bebidas/teVerde.webp",
    "/pfc/img/bebidas/teNegro.jfif",
    "/pfc/img/bebidas/teJengibre.jfif",
    "/pfc/img/bebidas/teManzanilla.jfif",
    "/pfc/img/bebidas/teMenta.jfif",
    "/pfc/img/bebidas/teRooibos.jfif",
    "/pfc/img/bebidas/teFrutas.jfif",
    "/pfc/img/bebidas/teHibisco.jfif",
    "/pfc/img/bebidas/teCurcuma.jfif",
    "/pfc/img/bebidas/teHierbas.jfif",
    "/pfc/img/bebidas/teOolong.jfif",
    "/pfc/img/bebidas/teChai.jfif"
];

let arrayDescripcion = [
    "Café fuerte y concentrado hecho con una pequeña cantidad de agua a alta presión. Es la base de muchos otros tipos de cafés",
    "Café suave hecho añadiendo agua caliente al espresso",
    "Bebida a base de espresso y leche caliente. Se suele servir con una capa de espuma de leche en la parte superior",
    "Bebida similar al latte, pero con una proporción de espresso, leche y espuma de leche al tercio",
    "Bebida a base de espresso, leche caliente y chocolate. A menudo se sirve con una capa de nata montada",
    "Espresso con una pequeña cantidad de leche vaporizada añadida para suavizar el sabor",
    "Bebida a base de espresso y leche caliente, similar al latte pero con una cantidad menor de leche y una textura más suave",
    "Bebida fría a base de café, leche y hielo, a menudo con saborizantes y jarabes agregados",
    "Café simple juntado con leche caliente",
    "Bebida de espresso con una doble porción de café y agua caliente",
    "Bebida postre que consiste en un helado de vainilla cubierto con un solo espresso",
    "Bebida alcohólica hecha con café, whisky, azúcar y crema batida",
    "Uno de los más populares y se hace con hojas de té sin fermentar, es rico en antioxidantes y se dice que tiene muchos beneficios para la salud",
    "Otro tipo de té muy popular y se hace con hojas de té que han sido fermentadas. Tiene un sabor más fuerte que el té verde y se puede disfrutar con leche o limón",
    "Té hecho con jengibre fresco junto con un sabor picante y reconfortante, siendo excelente para conciliar el sueño",
    "Otro tipo de té muy popular y se hace con hojas de té que han sido fermentadas. Tiene un sabor más fuerte que el té verde y se puede disfrutar con leche o limón",
    "se hace con hojas frescas de menta y tiene un sabor fresco y refrescante. Es excelente para ayudar con la digestión y puede ayudar a aliviar los dolores de cabeza",
    "También conocido como té rojo, es una infusión de hierbas que se hace con las hojas de una planta sudafricana. Tiene un sabor suave y es rico en antioxidantes",
    "Se hace con frutas secas o deshidratadas y puede ser una excelente alternativa a las bebidas azucaradas",
    "Se hace con flores de hibisco y tiene un sabor ácido y afrutado. Es rico en vitamina C y puede ayudar a bajar la presión arterial",
    "Se hace con raíz de cúrcuma fresca o en polvo y tiene un sabor cálido y picante. Es rico en antioxidantes y puede ayudar a reducir la inflamación",
    "Se hace con una variedad de hierbas y plantas, como menta, hierba luisa, tomillo, etc. Puede ser una excelente opción para disfrutar después de una comida o en un día frío",
    "Té chino que se encuentra entre el té verde y el té negro en términos de oxidación. Tiene un sabor suave y floral y se puede disfrutar caliente o frío",
    "Té indio que se hace con una mezcla de especias, como canela, jengibre, cardamomo y clavo. Tiene un sabor picante y reconfortante y se puede disfrutar con leche o limón"
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