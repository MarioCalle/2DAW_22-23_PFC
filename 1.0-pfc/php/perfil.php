<?php
session_start();
if (isset($_SESSION["usuario"])) {//Controlamos si la sesión ha sido cerrada, indicar que esta vacía o en caso contrario decir que usuario ha sido logueado
    if (isset($_SESSION["usuario"]["administrador"])) {
        header('location:/pfc/html/perfilErroneoAdmin.html');
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
    <link rel="stylesheet" href="/pfc/css/perfil.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="contenedorUsuario">
        <div class="descripcion">
            <div class="usuario">
                <h1>Saludos</h1>
                <?php
                    $usuario = $_SESSION["usuario"]["nombre"];
                    echo '<h1>'.$usuario.'</h1>';
                ?>
            </div>
            <div class="usuarioDescripcion">
                <h2>Bienvenido a su perfil de coffee Junior</h2>
            </div>
            <div class="tusDatos">
                <h2>Tus datos personales:</h2>
                <?php
                    $nombre = $_SESSION["usuario"]["nombre"];
                    $apellidos = $_SESSION["usuario"]["apellidos"];
                    $mail = $_SESSION["usuario"]["correo"];
                    $password = $_SESSION["usuario"]["contrasenia"];
                    $passwordEncriptada = str_repeat('*', strlen($password));
                    $telefono = $_SESSION["usuario"]["telefono"];
                    $canjeado = $_SESSION["usuario"]["productos_canjeados_totales"];
                    echo '
                        <p>Nombre: '.$nombre.'</p>
                        <p>Apellidos: '.$apellidos.'</p>
                        <p>Correo electrónico: '.$mail.'</p>
                        <p><label>Tu contraseña: </label><label id="mostrar">'.$passwordEncriptada.'</label><span id="simbolo" class="material-symbols-outlined">visibility</span></p>
                        <p>Teléfono: '.$telefono.'</p>
                        <p>Productos canjeados: '.$canjeado.'</p>
                    ';
                ?>
            </div>
        </div>
        <div class="codigo">
            <div class="contenedorCodigo">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=https://htmlcsstoimage.com"/>
                <?php
                    $codigo = $_SESSION["usuario"]["codigo"];
                    echo '<p>'.$codigo.'</p>';
                ?>
            </div>
            <?php
                $puntos = $_SESSION["usuario"]["puntos_totales"];
                echo '<h2>Tus puntos:'.$puntos.'</h2>';
            ?>
            <form action="/pfc/php/cerrarSesion.php" method="post">
                <button>Cerrar Sesión</button>
                <p>O también</p>
                <a class="principal" href="/pfc/php/indexCorrecto.php">Volver a la página principal</a>
            </form>
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
