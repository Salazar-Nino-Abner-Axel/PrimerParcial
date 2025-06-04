<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <title>Favoritos de Halo</title>
    <style>
        body {
            background-color: #000000;
            color: #FFFFFF;
        }
        h1 {
            text-align: center;
            color: #FF8C00;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #4A5D6B;
        }
        tr:nth-child(even) {
            background-color: #2E4B38;
        }
        tr:nth-child(odd) {
            background-color: #3A5A45;
        }
        th {
            background-color: #4A5D6B;
            color: #FFFFFF;
        }
        .container {
            width: 50%;
            margin: 20px auto;
            background-color: #2E4B38;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: #FFFFFF;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
            color: #FF8C00;
        }
        input[type="text"], select {
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #4A5D6B;
            color: #FFFFFF;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #FF8C00;
            border: none;
            color: #1A2B23;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #E07B00;
        }
        .success, .error {
            text-align: center;
            margin: 10px 0;
        }
        .success {
            color: #FF8C00;
        }
        .error {
            color: red;
        }
        .jumbotron {
            background-color: #000000;
            padding: 20px;
        }
        .jumbotron h1 {
            color: #FF8C00;
        }
    </style>
</head>
<body>
    <div class="jumbotron">
        <h1>REGISTRO DE FAVORITOS HALO</h1>
        <div class="container">
            <form method="POST" id="formulario">
                <label for="spartan">Spartan Favorito:</label>
                <input type="text" id="spartan" name="spartan" required>

                <label for="enemigo">Enemigo Favorito:</label>
                <input type="text" id="enemigo" name="enemigo" required>

                <label for="arma">Arma Favorita:</label>
                <input type="text" id="arma" name="arma" required>

                <label for="vehiculo">Vehículo Favorito:</label>
                <input type="text" id="vehiculo" name="vehiculo" required>

                <label for="juego">Juego Favorito:</label>
                <select id="juego" name="juego" required>
                    <option value="">Seleccione un juego</option>
                    <?php
                    // Conexión a la base de datos para llenar el select
                    $username = "root";
                    $password = "";
                    $servername = "localhost";
                    $database = "halo";

                    $conexion = new mysqli($servername, $username, $password, $database);
                    if ($conexion->connect_error) {
                        die("<p class='error'>Conexión fallida: " . $conexion->connect_error . "</p>");
                    }

                    $sql_juegos = "SELECT juego_id, nombre FROM juegos";
                    $result_juegos = $conexion->query($sql_juegos);

                    while ($row = $result_juegos->fetch_assoc()) {
                        echo "<option value='" . $row['juego_id'] . "'>" . $row['nombre'] . "</option>";
                    }
                    ?>
                </select>

                <input type="submit" value="Agregar Registro">
            </form>
        </div>

        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        // Conexión a la base de datos para procesar el formulario
        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("<p class='error'>Conexión fallida: " . $conexion->connect_error . "</p>");
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $spartan = $_POST["spartan"];
            $enemigo = $_POST["enemigo"];
            $arma = $_POST["arma"];
            $vehiculo = $_POST["vehiculo"];
            $juego_id = $_POST["juego"];

            // Insertar Spartan
            $stmt = $conexion->prepare("INSERT INTO spartans (nombre) VALUES (?)");
            $stmt->bind_param("s", $spartan);
            if ($stmt->execute()) {
                $spartan_id = $conexion->insert_id;
            } else {
                echo "<p class='error'>Error al insertar Spartan: " . $stmt->error . "</p>";
            }
            $stmt->close();

            // Insertar Enemigo
            $stmt = $conexion->prepare("INSERT INTO enemigos (nombre) VALUES (?)");
            $stmt->bind_param("s", $enemigo);
            if ($stmt->execute()) {
                $enemigo_id = $conexion->insert_id;
            } else {
                echo "<p class='error'>Error al insertar Enemigo: " . $stmt->error . "</p>";
            }
            $stmt->close();

            // Insertar Arma
            $stmt = $conexion->prepare("INSERT INTO armas (nombre) VALUES (?)");
            $stmt->bind_param("s", $arma);
            if ($stmt->execute()) {
                $arma_id = $conexion->insert_id;
            } else {
                echo "<p class='error'>Error al insertar Arma: " . $stmt->error . "</p>";
            }
            $stmt->close();

            // Insertar Vehículo
            $stmt = $conexion->prepare("INSERT INTO vehiculos (nombre) VALUES (?)");
            $stmt->bind_param("s", $vehiculo);
            if ($stmt->execute()) {
                $vehiculo_id = $conexion->insert_id;
            } else {
                echo "<p class='error'>Error al insertar Vehículo: " . $stmt->error . "</p>";
            }
            $stmt->close();

            // Insertar en registros
            if (isset($spartan_id) && isset($enemigo_id) && isset($arma_id) && isset($vehiculo_id) && isset($juego_id)) {
                $stmt = $conexion->prepare("INSERT INTO registros (spartan_id, enemigo_id, arma_id, vehiculo_id, juego_id) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("iiiii", $spartan_id, $enemigo_id, $arma_id, $vehiculo_id, $juego_id);
                if ($stmt->execute()) {
                    echo "<p class='success'>Nuevo registro agregado con éxito.</p>";
                } else {
                    echo "<p class='error'>Error al insertar en registros: " . $stmt->error . "</p>";
                }
                $stmt->close();
            }
        }

        // Mostrar los registros
        $sql = "SELECT r.id, s.nombre AS spartan, e.nombre AS enemigo, a.nombre AS arma, v.nombre AS vehiculo, j.nombre AS juego
                FROM registros r
                LEFT JOIN spartans s ON r.spartan_id = s.spartan_id
                LEFT JOIN enemigos e ON r.enemigo_id = e.enemigo_id
                LEFT JOIN armas a ON r.arma_id = a.arma_id
                LEFT JOIN vehiculos v ON r.vehiculo_id = v.vehiculo_id
                LEFT JOIN juegos j ON r.juego_id = j.juego_id";
        $resultado = $conexion->query($sql);

        if ($resultado) {
            if ($resultado->num_rows > 0) {
                echo "<table class='table table-bordered'>";
                echo "<tr><th>ID</th><th>Spartan</th><th>Enemigo</th><th>Arma</th><th>Vehículo</th><th>Juego</th></tr>";
                while ($row = $resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row["id"] . "</td>
                            <td>" . $row["spartan"] . "</td>
                            <td>" . $row["enemigo"] . "</td>
                            <td>" . $row["arma"] . "</td>
                            <td>" . $row["vehiculo"] . "</td>
                            <td>" . $row["juego"] . "</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p class='error'>No se encontraron registros en la base de datos.</p>";
            }
        } else {
            echo "<p class='error'>Error en la consulta: " . $conexion->error . "</p>";
        }

        $conexion->close();
        ob_end_flush();
        ?>
    </div>
</body>
</html>