<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre nosotros</title>
    <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
    <script defer src="/pfc/js/indice.js"></script>
    <link rel="stylesheet" href="/pfc/css/style.css">
    <link rel="stylesheet" href="/pfc/css/menu.css">
    <link rel="stylesheet" href="/pfc/css/footer.css">
    <link rel="stylesheet" href="/pfc/css/queEs.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <!--Links scroll-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
    <nav>
    <input type="checkbox" id="check">
        <label for="check">
            <span class="material-symbols-outlined" id="btn">menu</span>
            <span class="material-symbols-outlined" id="cancel">close</span>
        </label>
        <a id="logo" href="/pfc/php/indexCorrecto.php">CJ</a>
        <ul>
            <li><a href="/pfc/php/indexCorrecto.php">Principal</a></li>
            <li><a href="/pfc/php/ofertasCliente.php">Ofertas</a></li>
            <li><a href="/pfc/php/puntos.php">Puntos</a></li>
            <li><a href="/pfc/php/sobreNosotros.php">Sobre nosotros</a></li>
            <?php
                session_start();
                if (isset($_SESSION["usuario"])) {//Controlamos si la sesión ha sido cerrada, indicar que esta vacía o en caso contrario decir que usuario ha sido logueado
                    $usuario = $_SESSION["usuario"]["nombre"];
                    echo '<li><a href="/pfc/php/perfil.php">'.$usuario.'</a></li>';
                } else {
                    echo '<li><a href="/pfc/html/login.html">Invitado</a></li>';
                }
            ?>
        </ul>
    </nav>
    <div class="textoSobreNosotros">
        <h1>Conoce más acerca de Coffee Junior</h1>
        <h2>Y su historia...</h2>
    </div>
    <section id="zona">
        <div data-aos="fade-left" class="contenidoQueEs">
            <h1>¿Que es Coffee Junior?</h1>
            <div class="queEs">
                <p>Coffee Junior es una empresa que se formó en 2019.
                    Al principio, la empresa se llamaba JuniorTech,
                    donde los creadores eran 2 informáticos, un programador 
                    y un técnico de sistemas. El objetivo inicial de la tienda
                    era la venta y arreglo de equipos informáticos, pero 
                    un día, un familiar del programador les recomendó que
                    se dedicaran a hacer un cibercafé debido a que la zona era muy
                    transitada por los jóvenes y la única cafetería que había iba
                    a convertirse en una panadería. Así que se pusieron a hacer cambios
                    como remodelar el local, anunciarse por una página web y más gente vió
                    el potencial que iba a adquirir, por lo que ofertaron puestos de trabajo. 
                    Finalmente, la tienda pasó de ser un local informático a ser un cibercafé
                    con 20 personales y los 2 chicos informáticos decidieron llamar el local
                    Coffee Junior
                </p>
                <img id="imgQueEs" src="/pfc/img/queEs.avif" alt="">
            </div>
        </div>
        <div data-aos="fade-right" class="contenidoQuienesSomos">
            <div id="zonaTitulo">
                <h1>¿Quiénes somos?</h1>
                <a>d</a>
            </div>
            <div class="quienesSomos">
                <p>Los integrantes de Coffee Junior como ya dijimos, 
                    lo componían principalmente 2 informáticos, 
                    donde destacamos al programador Mario de la Calle
                    Munguia y su amigo Fran Gómez de sistemas. Posteriórmente se 
                    unieron 18 personas más, destacando a los 5 cocineros
                    como Rubén Pérez o Diana Suarez, 3 Camareros como Paco Gómez,
                    más tarde ampliaron la plantilla con más informáticos con una 
                    suma de 5 más y finalmente el resto de la plantilla lo conforman
                    limpieza, gestión, publicidad y diseñadores.
                </p>
                <img id="imgQuienesSomos" src="/pfc/img/quienesSomos.webp" alt="">
            </div>
        </div>
        <div data-aos="fade-left" class="contenidoQueEs">
            <h1>¿Dónde nos situamos?</h1>
            <div class="queEs">
                <p>Coffee Junior Está situado en Valladolid, en la calle santiago, 14.
                    Se sitúa en el centro de valladolid y recibe muchos turistas y locales.
                    El local abre en horario de invierno desde las 9 de la mañana hasta las 19:30,
                    en horario de verano desde las 10:30 hasta las 21:00 y el horario festivo 
                    abre desde las 9 hasta las 17:00.
                </p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2981.2573501640913!2d-4.7292483!3d41.65018140000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd476d4cea28ac8f%3A0xcad7496372ed710d!2sC.%20de%20Santiago%2C%2014%2C%2047001%20Valladolid!5e0!3m2!1ses!2ses!4v1679938039598!5m2!1ses!2ses" width="700" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div data-aos="fade-right"  class="contenidoQuienesSomos">
            <div id="zonaTitulo">
                <h1>Compromiso con el medio ambiente</h1>
                <a>d</a>
            </div>
            <div class="quienesSomos">
                <p>En Coffee Junior, nuestro compromiso con el medio
                    ambiente se basa en el uso de energías renovables 
                    como la solar, también nuestras bolsas y envases están
                    hechos de cartón y papel reciclado resistentes para
                    evitar el consumo abusivo, la comida que no se consume, la 
                    limpiamos y se lleva al banco de alimentos de valladolid.
                    Finalmente, incluimos una venta de chicles con el sello eco,
                    donde cada compra de estos chicles, el dinero se destina a 
                    organizaciones ecológicas para ayudar en la investigación
                    y desarrollo de medidas contra el cambio climático
                </p>
                <img id="imgQuienesSomos" src="/pfc/img/medioAmbiente.avif" alt="">
            </div>
        </div>
    </section>
    <footer data-aos="fade-up">
        <h1>Sigue nuestras redes sociales</h1>
        <div id="contenedorFooter">
            <div id="contenedorIconos">
                <div class="wrapper">
                    <div class="icon facebook">
                       <div class="tooltip">
                          Facebook
                       </div>
                       <span><i class="fab fa-facebook-f"></i></span>
                    </div>
                    <div class="icon twitter">
                       <div class="tooltip">
                          Twitter
                       </div>
                       <span><i class="fab fa-twitter"></i></span>
                    </div>
                    <div class="icon instagram">
                       <div class="tooltip">
                          Instagram
                       </div>
                       <span><i class="fab fa-instagram"></i></span>
                    </div>
                    <div class="icon github">
                       <div class="tooltip">
                          Github
                       </div>
                       <span><i class="fab fa-github"></i></span>
                    </div>
                    <div class="icon youtube">
                       <div class="tooltip">
                          YouTube
                       </div>
                       <span><i class="fab fa-youtube"></i></span>
                    </div>
                </div>
            </div>
            <h1>Y recuerda que cafeterías hay muchas, pero como Coffee Junior en ningún sitio</h1>
            <p>Coffee Junior @ 2023</p>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>