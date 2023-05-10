//Creamos arrays para cada imagen, título y descripcion
let arrayTitulo = ["Mochila Baby Yoda", "Mochila Super Mario", "Mochila Cars", "Camisa Ocean pure", "Camisa negra vintage", "Camisa de Hora de Aventuras", "Pantalones Nike Verdes", "Pantalones Adidas café", "Pantalones Springfield Summer", "Mascota Coffee Junior"];
let arrayDescripcion = [
    "Mochila espaciosa del personaje de Baby yoda de la serie 'The Mandalorian', fabricada con tejido de alta calida y proteje el equipo de informática bien",
    "Una mochila muy icónica del fontanero del reino champiñón. Tus aventuras en el exterior con el fontanero en mochila nunca habían sido únicas",
    "Mochila espaciosa del personaje de la saga Cars 'Rayo Mqueen', donde podrás sentir como el campeón más rápido del mundo y acabar el más veloz al meter y sacar cosas",
    "Una camisa con un estilo acuático, navegando por la superficie del planeta y sintiendo el aroma marino",
    "Una camisa muy de los 80', dando un toque muy vintaje a tu vida y tus emociones",
    "¿Quién diría que Fin y sus amigos te acompañarían? Esta camisa te dará tu flow bacano",
    "Pantalones de la marca nike con un color verde co una tonalidad primaveral",
    "Pantalones de la marca adidas con un color café y un olor a Coffee Junior cuando te los levas",
    "Pantalones de la marca Springfield de edición veraniega (nadie lo niega)",
    "Taza de la mascota de Coffee Junior, haciéndote compañía en tus mañanas con un rico café"
];
let arrayImagenes = ["/pfc/img/merchandising/mochilaBabyYoda.jpg", "/pfc/img/merchandising/superMario.jfif",  "/pfc/img/merchandising/cars.jfif", "/pfc/img/merchandising/oceano.jpg", "/pfc/img/merchandising/vintaje.jpg", "/pfc/img/merchandising/horaAventuras.png", "/pfc/img/merchandising/nikeVerde.jfif", "/pfc/img/merchandising/adidasCafe.jfif", "/pfc/img/merchandising/sumer.jpg", "/pfc/img/merchandising/mascota.webp"];

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