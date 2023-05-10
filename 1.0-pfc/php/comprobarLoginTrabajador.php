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
    $email = $_POST['email'];
    $contrasenia = $_POST['password'];
    $sql2 = "SELECT * FROM trabajador WHERE correo = '$email' AND contrasenia = '$contrasenia'";
    $resultado = mysqli_query($conn, $sql2);
    if (mysqli_num_rows($resultado) == 1) {
        $trabajador = mysqli_fetch_assoc($resultado);
        $_SESSION['usuario'] = $trabajador;
        header('location:/pfc/php/perfilTrabajador.php');
    } else {
        echo "Usuario o contraseña incorrectos";
    }
    mysqli_close($conn);
?>
