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
    <link rel="stylesheet" href="/pfc/css/listarTrabajadores.css">
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($fila = mysqli_fetch_assoc($resultado_trabajadores)) {
                            echo "<tr>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['id_trabajador']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['nombre']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila['apellidos']."</td>";
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
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($fila2 = mysqli_fetch_assoc($resultado_administradores)) {
                            echo "<tr>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['id_trabajador']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['nombre']."</td>";
                            echo "<td style='border: 1px solid burlywood; padding: 5px;'>".$fila2['apellidos']."</td>";
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