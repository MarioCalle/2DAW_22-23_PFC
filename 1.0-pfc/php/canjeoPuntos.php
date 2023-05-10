<?php
// Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tienda_coffeejunior";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Obtener el ID del producto y el nombre desde el formulario
    $id_producto = $_POST['id_producto'];
    $nombre_cliente = $_POST['nombre_cliente'];

    // Obtener la información del producto desde la base de datos
    $sql = "SELECT * FROM producto WHERE id_producto = $id_producto";
    $resultado = $conn->query($sql);
    $fila = $resultado->fetch_assoc();

    // Restar los puntos del producto a los puntos totales del cliente
    $puntos = $_POST['puntos_producto'];
    $sql = "SELECT * FROM cliente WHERE nombre = '$nombre_cliente'";
    $resultado = $conn->query($sql);
    $fila = $resultado->fetch_assoc();
    $puntos_totales_nuevos = $fila['puntos_totales'] - $puntos;

    // Actualizar el registro del cliente en la base de datos con los nuevos puntos y la cantidad de productos canjeados
    $productos_canjeados_nuevos = $fila['productos_canjeados_totales'] + 1;
    $sql = "UPDATE cliente SET puntos_totales = $puntos_totales_nuevos, productos_canjeados_totales = $productos_canjeados_nuevos WHERE nombre = '$nombre_cliente'";
    $conn->query($sql);
    echo "<script>alert('Has canjeado ".$puntos." CoffeePoints. Te quedas finalmente con ".$puntos_totales_nuevos." CoffeePoints')</script>";
    header('location:/pfc/php/perfil.php');

    // Cerrar la conexión a la base de datos
    $conn->close();

?>