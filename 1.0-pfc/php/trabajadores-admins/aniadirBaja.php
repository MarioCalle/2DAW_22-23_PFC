<?php
session_start();
if (isset($_SESSION["usuario"])) {//Controlamos si la sesión ha sido cerrada, indicar que esta vacía o en caso contrario decir que usuario ha sido logueado
    if (isset($_SESSION["usuario"]["administrador"]) == "no") {
        header('location:/pfc/html/trabajadorOpcionesNo.html');
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
    <title>Añadir trabajador</title>
    <link rel="stylesheet" href="/pfc/css/perfilTrabajador.css">
    <link rel="stylesheet" href="/pfc/css/perfilTrabajadorOpciones.css">
</head>
<body>
<div class="perfilTrabajador">
        <h1>Añadir/Eliminar un trabajador</h1>
            <div class="contenedorRegistro">
                <h2>Rellene los datos del trabajador:</h2>
                <form action="/pfc/php/trabajadores-admins/aniadirBajaConf.php" method="post" class="form-register">
                    <input class="controls" type="text" name="nombre" id="nombre" placeholder="Nombre del trabajador nuevo">
                    <input class="controls" type="text" name="apellido" id="apellido" placeholder="Apellidos del trabajador">
                    <input class="controls" type="email" name="correo" id="correo" placeholder="Correo del trabajador">
                    <input class="controls" type="password" name="contraseña" id="contraseña" placeholder="Contraseña del trabajador">
                    <input class="controls" type="tel" name="telefono" id="telefono" placeholder="Teléfono del trabajador">
                    <input class="controls" type="text" name="cargo" id="cargo" placeholder="cargo del trabajador">
                    <p><input type="checkbox" id="checkbox" name="administrador">Quiero asignar un nuevo administrador más</p>
                    <input class="botons" type="submit" value="Registrar">
                    <a href="/pfc/php/perfilTrabajador.php">Volver</a>
                </form>
            </div>
        </div>
</body>
</html>