<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda_coffeejunior";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

$cliente = $_POST['cliente'];
$puntos = $_POST['puntos'];
if ($cliente == 'default') {
    header('location:/pfc/php/trabajadores-admins/gestionCliente.php');
} else {
    $sql_update = "UPDATE cliente SET puntos_totales = $puntos WHERE nombre = '$cliente'";
    if (mysqli_query($conn, $sql_update)) {
        header('Location: /pfc/php/perfilTrabajador.php');
    } else {
        echo "Error al actualizar al cliente: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
