<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_coffeejunior";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener los trabajadores que no son administradores
$sql_trabajadores = "SELECT * FROM cliente";
$resultadoCliente = mysqli_query($conn, $sql_trabajadores);


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
        <h1>Gestionar un cliente</h1>
            <div class="contenedorRegistro">
                <h2>Seleccione un cliente y sus puntos:</h2>
                <?php
                echo '
                    <form action="/pfc/php/trabajadores-admins/gestionClienteConf.php" method="post" class="form-register">
                        <select id="cliente" name="cliente">
                            <option value="default" selected>Selecciona Un cliente</option>';
                            while ($fila = mysqli_fetch_assoc($resultadoCliente)) {
                                echo '<option value="'.$fila['nombre'].'">'.$fila['nombre'].'</option>';
                            }
                echo '</select>
                        <input class="controls" type="number" name="puntos" id="puntos" placeholder="Introduzca los puntos a actualizar">
                        <input class="botons" type="submit" style="padding: 10px; background: #FFEBA7; color: rgb(157, 130, 95); border-color: transparent; width: 50%; border-radius: 20px;" value="Actualizar puntos">
                        <a href="/pfc/php/perfilTrabajador.php">Volver</a>
                    </form>
                    ';
                ?>
            </div>
        </div>
</body>
</html>