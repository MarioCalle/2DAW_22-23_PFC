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

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $correo = $_POST["correo"];
    $contrasenia = $_POST["contraseña"];
    $telefono = $_POST["telefono"];
    $cargo = $_POST["cargo"];
    $administrador = isset($_POST["administrador"]) ? "si" : "no";

    $sql2 = "INSERT INTO trabajador (nombre, apellidos, correo, contrasenia, telefono, cargo, administrador) VALUES ('$nombre', '$apellido', '$correo', '$contrasenia', '$telefono', '$cargo', '$administrador')";
    $resultado = mysqli_query($conn, $sql2);

    if ($resultado) {
        header('location:/pfc/php/perfilTrabajador.php');
    } else {
        echo "Error al añadir trabajador: " . mysqli_error($conn);
    }

    mysqli_close($conn);