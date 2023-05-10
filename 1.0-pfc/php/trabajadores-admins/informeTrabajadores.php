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
$sql_trabajadores = "SELECT * FROM trabajador WHERE administrador = 'no'";
$resultado_trabajadores = mysqli_query($conn, $sql_trabajadores);

// Obtener los administradores
$sql_administradores = "SELECT * FROM trabajador WHERE administrador = 'si'";
$resultado_administradores = mysqli_query($conn, $sql_administradores);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/pfc/css/listaInformeTrabajadores.css">
</head>
<body>
    <div class="tusDatos">
        <h1>Aquí Podrás ver el listado de todos los trabajadores y administradores</h1>
        <div class="tusDatos2">
            <section>
                <h1>Listado de Todos los trabajadores</h1>
                <table style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid burlywood; padding: 5px;">ID</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Nombre</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Apellidos</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Correo</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Contraseña</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Teléfono</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($fila = mysqli_fetch_assoc($resultado_trabajadores)) {
                            echo "<tr>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['id_trabajador']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['nombre']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['apellidos']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['correo']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['contrasenia']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['telefono']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['cargo']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>
            <section>
                <h1>Listado de Todos los administradores</h1>
                <table style="border-collapse: collapse;">
                    <thead>
                        <tr>
                            <th style="border: 1px solid burlywood; padding: 5px;">ID</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Nombre</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Apellidos</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Correo</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Contraseña</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Teléfono</th>
                            <th style="border: 1px solid burlywood; padding: 5px;">Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($fila2 = mysqli_fetch_assoc($resultado_administradores)) {
                            echo "<tr>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['id_trabajador']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['nombre']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['apellidos']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['correo']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['contrasenia']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['telefono']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['cargo']."</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
        <a href="/pfc/php/perfilTrabajador.php">Volver al perfil</a>
    </div>
</body>
</html>

<?php
mysqli_close($conn);
?>