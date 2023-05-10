<?php
session_start();
if (isset($_SESSION["usuario"])) {//Controlamos si la sesión ha sido cerrada, indicar que esta vacía o en caso contrario decir que usuario ha sido logueado
    if (isset($_SESSION["usuario"]["codigo"])) {
        header('location:/pfc/html/perfilErroneoCliente.html');
        exit(); // Salir del script para que no se imprima el HTML restante
    } else {
        $usuario = $_SESSION["usuario"]["nombre"];
    }
} else {
    header('location:/pfc/html/sesionCaducada.html');
    exit(); // Salir del script para que no se imprima el HTML restante
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cuenta</title>
    <link rel="stylesheet" href="/pfc/css/perfilTrabajador.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="perfilTrabajador">
        <h1>Bienvenido de vuelta,
            <?php
                $usuario = $_SESSION["usuario"]["nombre"];
                echo $usuario;
            ?>
        </h1>
        <div class="contenedorInferior">
            <div class="tusDatos">
                        <h2>Tus datos personales:</h2>
                        <?php
                            $nombre = $_SESSION["usuario"]["nombre"];
                            $apellidos = $_SESSION["usuario"]["apellidos"];
                            $mail = $_SESSION["usuario"]["correo"];
                            $password = $_SESSION["usuario"]["contrasenia"];
                            $passwordEncriptada = str_repeat('*', strlen($password));
                            $telefono = $_SESSION["usuario"]["telefono"];
                            $cargo = $_SESSION["usuario"]["cargo"];
                            $administrador = $_SESSION["usuario"]["administrador"];
                            echo '
                                <p>Nombre: '.$nombre.'</p>
                                <p>Apellidos: '.$apellidos.'</p>
                                <p>Correo electrónico: '.$mail.'</p>
                                <p><label>Tu contraseña: </label><label id="mostrar">'.$passwordEncriptada.'</label><span id="simbolo" class="material-symbols-outlined">visibility</span></p>
                                <p>Teléfono: '.$telefono.'</p>
                                <p>Puesto: '.$cargo.'</p>
                                <p>Administrador: '.$administrador.'</p>
                            ';
                        ?>
            </div>
            <div class="tusOpciones">
                <div class="opcionesAdministrador">
                    <?php
                        if ($_SESSION["usuario"]["administrador"] == "no") {
                            echo '
                                <h1 id="tituloOpciones">Tus opciones como Trabajador:</h1>
                                <div id="tusBotones">
                                    <a href="/pfc/php/trabajadores-admins/visualizarTrabajadores.php">Visualizar trabajadores</a>
                                    <a href="/pfc/php/trabajadores-admins/gestionCliente.php">Gestión de clientes y sus puntos</a>
                                    <a href="/pfc/php/trabajadores-admins/modificacionOfertas.html">Añadir o quitar ofertas a la web</a>
                                </div>
                            ';
                        } else {
                            echo'
                                    <h1 id="tituloOpciones">Tus opciones como administrador:</h1>
                                    <div id="tusBotones">
                                        <a href="/pfc/php/trabajadores-admins/aniadirBaja.php">Añadir o dar de baja a un trabajador</a>
                                        <a href="/pfc/php/trabajadores-admins/visualizarTrabajadores.php">Visualizar trabajadores</a>
                                        <a href="/pfc/php/trabajadores-admins/informeTrabajadores.php">Ver el informe de los trabajadores</a>
                                        <a href="/pfc/php/trabajadores-admins/gestionCliente.php">Gestión de clientes y sus puntos</a>
                                        <a href="/pfc/php/trabajadores-admins/modificacionOfertas.html">Añadir o quitar ofertas a la web</a>
                                    </div>
                            ';
                        }
                    ?>
                    <form action="/pfc/php/cerrarSesion.php" method="post">
                        <button>Cerrar Sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // Obtener los elementos del DOM
        const textoOculto = document.getElementById("mostrar");
        const divCambiar = document.getElementById("simbolo");

        // Estado actual del texto oculto
        let oculto = true;

        // Al hacer clic en el divCambiar, cambiar el texto
        divCambiar.addEventListener("click", () => {
        // Si está oculto, mostrar el texto original, y si no, ocultar el texto
        if (oculto) {
            textoOculto.innerHTML = `<?php $password = $_SESSION["usuario"]["contrasenia"]; echo $password ?>`;
        } else {
            textoOculto.innerHTML = `<?php $password = $_SESSION["usuario"]["contrasenia"]; $passwordEncriptada = str_repeat('*', strlen($password));echo $passwordEncriptada; ?>`;
        }
        // Cambiar el estado actual
        oculto = !oculto;
        });

    </script>
</body>
</html>