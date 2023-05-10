<?php
session_start();
if (isset($_SESSION["usuario"]["administrador"])) {//Controlamos si la sesión ha sido cerrada, indicar que esta vacía o en caso contrario decir que usuario ha sido logueado
    header('location:/pfc/html/administradorNo.html');
    exit(); // Salir del script para que no se imprima el HTML restante
} else {
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ofertas</title>
    <script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>
    <script defer src="/pfc/js/puntos.js"></script>
    <script defer src="/pfc/js/indice.js"></script>
    <link rel="stylesheet" href="/pfc/css/style.css">
    <link rel="stylesheet" href="/pfc/css/menu.css">
    <link rel="stylesheet" href="/pfc/css/footer.css">
    <link rel="stylesheet" href="/pfc/css/puntos.css">
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
    <main id="zonaPuntos">
        <img src="/pfc/img/puntosLogo.avif" width="200px" height="200px" alt="">
        <div id="tituloPuntos">
            <h1>Si gastas mucho, recibes mucho</h1>
            <h3>Recibe puntos por tus compras y canjéalos por productos</h3>
        </div>
        <img src="/pfc/img/puntosLogo.avif" width="200px" height="200px" alt="">
    </main>
    <main id="productos">
        <h1>Productos a canjear</h1>
        <section class="contenedorPuntos">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "tienda_coffeejunior";
            
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                if (!$conn) {
                    die("Conexión fallida: " . mysqli_connect_error());
                }

                $sql = "SELECT * FROM producto";
                $result = $conn->query($sql);

                // Comprobar si hay resultados y mostrar los productos
                if ($result->num_rows > 0) {
                    $i = 1;
                    while($row = $result->fetch_assoc()) {
                        if (isset($_SESSION["usuario"])) {
                            $usuarioPuntos = $_SESSION["usuario"]["puntos_totales"];
                            if ($usuarioPuntos >= $row["puntos_producto"]) {
                                echo '
                                    <div class="producto" id="producto'.$i.'" data-modal="modal'.$i.'">
                                        <img src="/pfc/img/productos/'.$row["ruta_producto"].'" width="150px" height="150px">
                                        <p>'.$row["nombre_producto"].'</p>
                                    </div>
                                    <div id="modal'.$i.'" class="ventana-modal">
                                        <div class="contenido-ventana-modal">
                                            <div id="cabezeraModal">
                                                <span class="cerrar" id="cerrar'.$i.'">&times;</span>
                                                <h3>'.$row["nombre_producto"].'</h3>
                                            </div>
                                            <img src="/pfc/img/productos/'.$row["ruta_producto"].'" width="150px" height="150px">
                                            <p>'.$row["descripcion_producto"].'</p>
                                            <p>Puntos:'.$row["puntos_producto"].'</p>
                                            <form method="post" action="/pfc/php/canjeoPuntos.php">
                                                <input type="hidden" value="'.$_SESSION["usuario"]["nombre"].'" name="nombre_cliente">
                                                <input type="hidden" value="'.$row["id_producto"].'" name="id_producto">
                                                <input type="hidden" value="'.$row["puntos_producto"].'" name="puntos_producto">
                                                <button>Canjear Producto</button>
                                            </form>
                                        </div>
                                    </div>
                                ';
                            } else {
                                $puntosFaltantes = $row["puntos_producto"] - $usuarioPuntos;
                                echo '
                                    <div class="producto" id="producto'.$i.'" data-modal="modal'.$i.'">
                                        <img src="/pfc/img/productos/'.$row["ruta_producto"].'" width="150px" height="150px">
                                        <p>'.$row["nombre_producto"].'</p>
                                    </div>
                                    <div id="modal'.$i.'" class="ventana-modal">
                                        <div class="contenido-ventana-modal">
                                            <div id="cabezeraModal">
                                                <span class="cerrar" id="cerrar'.$i.'">&times;</span>
                                                <h3>'.$row["nombre_producto"].'</h3>
                                            </div>
                                            <img src="/pfc/img/productos/'.$row["ruta_producto"].'" width="150px" height="150px">
                                            <p>'.$row["descripcion_producto"].'</p>
                                            <p>Puntos:'.$row["puntos_producto"].'</p>
                                            <p>Te faltan '.$puntosFaltantes.' CoffeePoints</p>
                                        </div>
                                    </div>
                                ';
                            }
                        } else {
                            echo '
                                <div class="producto" id="producto'.$i.'" data-modal="modal'.$i.'">
                                    <img src="/pfc/img/productos/'.$row["ruta_producto"].'" width="150px" height="150px">
                                    <p>'.$row["nombre_producto"].'</p>
                                </div>
                                <div id="modal'.$i.'" class="ventana-modal">
                                    <div class="contenido-ventana-modal">
                                        <div id="cabezeraModal">
                                            <span class="cerrar" id="cerrar'.$i.'">&times;</span>
                                            <h3>'.$row["nombre_producto"].'</h3>
                                        </div>
                                        <img src="/pfc/img/productos/'.$row["ruta_producto"].'" width="150px" height="150px">
                                        <p>'.$row["descripcion_producto"].'</p>
                                        <p>Inicia sesión para saber el precio y canjear el producto</p>
                                    </div>
                                </div>
                            ';    
                        }
                        $i++;
                    }
                } else {
                    echo "No se encontraron productos.";
                }

                // Cerrar la conexión
                $conn->close();
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