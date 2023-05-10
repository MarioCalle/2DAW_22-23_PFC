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

    //Usaremos un generador de códigos
    function generarCaracter() {
        $caracter = '';
        $opciones = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $longitud = strlen($opciones);
        
        for($i=0; $i<10; $i++) {
          $indice = mt_rand(0, $longitud-1);
          $caracter .= $opciones[$indice];
        }
        
        return $caracter;
    }
    $codigo = generarCaracter();
      

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];
    $telefono = $_POST['telefono'];
    $sql = "INSERT INTO cliente (nombre, apellidos, correo, contrasenia, telefono, puntos_totales, productos_canjeados_totales, codigo) VALUES ('$nombre', '$apellidos', '$email', '$contrasenia', '$telefono', 0, 0, '$codigo')";
    $resultado = mysqli_query($conn, $sql);
    
    if ($resultado) {
        $id_cliente = mysqli_insert_id($conn);
        $sql2 = "SELECT * FROM cliente WHERE id_cliente = $id_cliente";
        $resultado2 = mysqli_query($conn, $sql2);
        $usuario = mysqli_fetch_assoc($resultado2);
        $_SESSION['usuario'] = $usuario;
        header('location:/pfc/php/indexCorrecto.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>
