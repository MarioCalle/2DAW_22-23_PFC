<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
    <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
    <script defer src="/pfc/js/indice.js"></script>
    <?php
        session_start();
        if (isset($_SESSION["usuario"])) {
            echo '
                <script defer src="/pfc/js/ofertas.js"></script>
                <script defer src="/pfc/js/ofertas2.js"></script>
            ';
        } else {
            echo '<script defer src="/pfc/js/ofertasInvitado.js"></script>';
        }
    ?>
    <link rel="stylesheet" href="/pfc/css/style.css">
    <link rel="stylesheet" href="/pfc/css/menu.css">
    <link rel="stylesheet" href="/pfc/css/footer.css">
    <link rel="stylesheet" href="/pfc/css/ofertas.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
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
                if (isset($_SESSION["usuario"])) {//Controlamos si la sesión ha sido cerrada, indicar que esta vacía o en caso contrario decir que usuario ha sido logueado
                    $usuario = $_SESSION["usuario"]["nombre"];
                    echo '<li><a href="/pfc/php/perfil.php">'.$usuario.'</a></li>';
                } else {
                    echo '<li><a href="/pfc/html/login.html">Invitado</a></li>';
                }
            ?>
        </ul>
    </nav>
    <main id="zonaOfertas">
        <section class="zonaTituloOfertas">
            <div class="textOfertas">
                <h1>Tenemos unas cuantas ofertas jugosas</h1>
                <p>Y muy tentadoras...</p>
            </div>
            <img src="/pfc/img/ofertas.jpg" width="300px" height="300px">
        </section>
        <section class="contenidoTituloOfertas">
            <h1 data-aos="fade-up">Destacadas</h1>
            <?php
                if (isset($_SESSION["usuario"])) {
                    echo '
                        <section id="ofertasDisponibles">
            
                        </section>
                        <p data-aos="fade-right">Por ser cliente, te mereces más ofertas</p>
                        <section id="ofertasExclusivas">
            
                        </section>
                    ';
                } else {
                    echo '
                        <section id="ofertasDisponibles">
            
                        </section>
                        <p data-aos="fade-right">¡Opps, las ofertas exclusivas solo están disponibles para los clientes!</p>
                    ';
                }
            ?>
        </section>
    </main>
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