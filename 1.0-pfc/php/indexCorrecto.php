<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
    <script defer src="/pfc/js/indice.js"></script>
    <link rel="stylesheet" href="/pfc/css/style.css">
    <link rel="stylesheet" href="/pfc/css/menu.css">
    <link rel="stylesheet" href="/pfc/css/footer.css">
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
    <header>
        <div class="container">
            <div class="left_content">
                <h1 class="titulo">Coffee Junior</h1>
                <h1>
                    <span class="auto-type"></span>
                </h1>
            </div>
        </div>
    </header>
    <div id="esconder" class="slidershow">
        <div class="slides">
            <input type="radio" name="r" id="r1" ckecked>
            <input type="radio" name="r" id="r2">
            <input type="radio" name="r" id="r3">
            <input type="radio" name="r" id="r4">
            <input type="radio" name="r" id="r5">
            <div class="slide s1">
                <div id="u">
                    <h1 data-text="#CoffeeNews">#CoffeeNews</h1>
                </div>
            </div>
            <div class="slide">
                <div id="u2">
                    <h1 data-text="#MaxPowerOnCoffee">#MaxPowerOnCoffee</h1>
                </div>
            </div>
            <div class="slide">
                <div id="u3">
                    <h1 data-text="#DoN'tStopTheCoffee">#DoN'tStopTheCoffee</h1>
                </div>
            </div>
            <div class="slide">
                <div id="u4">
                    <h1 data-text="#CreativeCoffee">#CreativeCoffee</h1>
                </div>
            </div>
            <div class="slide">
                <div id="u5">
                    <h1 data-text="#AlwaysOnCoffeeJunior">#AlwaysOnCoffeeJunior</h1>
                </div>
            </div>
        </div>
        <div class="navigation">
            <label for="r1" class="bar"></label>
            <label for="r2" class="bar"></label>
            <label for="r3" class="bar"></label>
            <label for="r4" class="bar"></label>
            <label for="r5" class="bar"></label>
        </div>
    </div>
    <section class="post-list">
        <div class="content">
            <article class="post" data-aos="fade-up">
                <div class="post-header">
                    <div class="post-img-1"></div>
                </div>
                <div class="post-body">
                    <span>15 Marzo, 2023 | Merchandasing</span>
                    <h2>Nuestro Merchandasing</h2>
                    <p class="descripcion">¡Consigue el merchandising de Coffee Junior y muestra tu 
                        amor por el café! Desde tazas y camisetas hasta gorras y bolsas, 
                        tenemos algo para todos los amantes del café. Añade un 
                        toque de estilo a tu rutina diaria. Disponible en tienda física</p>
                    <a href="/pfc/php/merchandasing.php" class="post-link">Ir a la moda</a>
                </div>
            </article>
            <article class="post" data-aos="fade-down">
                <div class="post-header">
                    <div class="post-img-2"></div>
                </div>
                <div class="post-body">
                    <span>15 Marzo, 2023 | carta de cafés</span>
                    <h2>Café por doquier</h2>
                    <p  class="descripcion">Disfruta del mejor café en Coffee Junior, nuestra especialidad. 
                        Desde el suave y afrutado "Café Colombiano" hasta el intenso 
                        y robusto "Café Italiano", cada taza es una experiencia 
                        única y deliciosa. Enamórate de una 
                        gama de sabores únicas.</p>
                    <a href="/pfc/php/cafe.php" class="post-link">Apacíguame la sed</a>
                </div>
            </article>
            <article class="post" data-aos="fade-up">
                <div class="post-header">
                    <div class="post-img-3"></div>
                </div>
                <div class="post-body">
                    <span>15 Marzo, 2023 | carta de tapas</span>
                    <h2>Mata el gusanillo</h2>
                    <p  class="descripcion">Satisface tus antojos con los aperitivos de Coffee Junior. 
                        Desde los croissants recién horneados hasta los muffins 
                        de arándanos, ofrecemos opciones tanto dulces como 
                        saladas para cada paladar. Acompaña tu café con uno 
                        de nuestros deliciosos aperitivos.</p>
                    <a href="/pfc/php/comida.php" class="post-link">Quiero degustar</a>
                </div>
            </article>
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
</body>
<script>
    let typed = new Typed(".auto-type", {
        strings: ["Despierta tus sentidos con nuestro café.", "El sabor que te mueve.", "Café recién hecho, sabor inolvidable.", "El aroma que despierta tus sentidos.", "Café con carácter, para gente con actitud.", "Sabor auténtico en cada taza.", "Café para los paladares más exigentes.", "Un café perfecto para un día perfecto.", "El mejor café de la ciudad.", "Siempre el sabor del buen café."],
        typeSpeed:50,
        backspeed:50,
        loop:true
    });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</html>