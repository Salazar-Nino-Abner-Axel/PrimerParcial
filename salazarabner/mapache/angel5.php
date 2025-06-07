<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>angel eduardo vazquez lopez</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.cdnfonts.com/css/noto-serif-display" rel="stylesheet">
    
    <style>
        h1 {
            text-align: center;
            color: royalblue;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 50px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1.5px solid pink;
        }
        tr:nth-child(even) {
            background-color: crimson;
            color: white;
        }
        tr:nth-child(odd) {
            background-color: royalblue;
            color: black;
        }
        th {
            background-color: #ff3eff;
            color: white;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light" style="background-color: #006e90;">
    <div class="container">
        <a class="navbar-brand" href="index.html" style="color:#ecf39e;">Inicio</a>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./index.html" id="navbarNavDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">tripulacion</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="http://localhost/mapache/angel.php" style="color: #000;">mostrar datos</a><br>
                        <a class="dropdown-item" href="http://localhost/mapache/angel2.php" style="color: #000;">mostras Datos</a><br>
                        <a class="dropdown-item" href="http://localhost/mapache/angel3.php" style="color: #000;">meter Datos</a><br>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">cacahuate</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="http://localhost/mapache/angel4.php" style="color: #000;">Spractyica 4</a><br>
                        <a class="dropdown-item" href="http://localhost/mapache/angel5.php" style="color: #000;">practica 5</a><br>
                        <a class="dropdown-item" href="http://localhost/mapache/angel6.php" style="color: #000;">practica 6</a><br>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">nose</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">practica 7</a><br>
                        <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">practoca 8</a><br>
                        <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">Practoca 9</a><br>
                        <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">practica 10</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="jumbotron">
    <h1>ESCUELAS SECUNDARIAS TÉCNICAS</h1>
</div>

<div class="container">
    <form method="POST" id="formulario">
        <label for="numero_control">Número de Control: </label>
        <input type="text" id="numero_control" name="numero_control" required><br>

        <label for="nombre">Nombre: </label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="apellido_paterno">Apellido Paterno: </label>
        <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>

        <label for="apellido_materno">Apellido Materno: </label>
        <input type="text" id="apellido_materno" name="apellido_materno" required><br>

        <label for="edad">Edad: </label>
        <input type="number" id="edad" name="edad" required><br>

        <label for="colonia">Colonia: </label>
        <input type="number" id="colonia" name="colonia" required><br>

        <label for="especialidad">Especialidad: </label>
        <input type="number" id="especialidad" name="especialidad" required><br>

        <label for="genero">Género: </label>
        <input type="number" id="genero" name="genero" required><br>

        <label for="correo">Correo Electrónico: </label>
        <input type="email" id="correo" name="correo" required><br>

        <label for="telefono">Número de Teléfono: </label>
        <input type="tel" id="telefono" name="telefono" required><br>

        <label for="fecha_ingreso">Fecha de Ingreso: </label>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>

        <input type="submit" value="Agregar Registro">
    </form>

    <table class="table table-bordered">
        <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "escuela";

        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
            die("Conexión fallida: " . $conexion->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            var_dump(value: $_POST); // Esto es útil para depuración
            
            $numero_control = $conexion->real_escape_string(string: $_POST["numero_control"]);
            $nombre = $conexion->real_escape_string(string: $_POST["nombre"]);
            $apellido_paterno = $conexion->real_escape_string(string: $_POST["apellido_paterno"]);
            $apellido_materno = $conexion->real_escape_string(string: $_POST["apellido_materno"]);
            $edad = $conexion->real_escape_string(string: $_POST["edad"]);
            $colonia = $conexion->real_escape_string(string: $_POST["colonia"]);
            $especialidad = $conexion->real_escape_string(string: $_POST["especialidad"]);
            $genero = $conexion->real_escape_string(string: $_POST["genero"]);
            $correo = $conexion->real_escape_string(string: $_POST["correo"]);
            $telefono = $conexion->real_escape_string(string: $_POST["telefono"]);
            $fecha_ingreso = $conexion->real_escape_string(string: $_POST["fecha_ingreso"]);

            // Verificar si la edad existe en la tabla 'edades'
            $result = $conexion->query("SELECT id FROM edades WHERE edad = '$edad'");
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $id_edad = $row['id'];
            } else {
                echo "<p>Error: La edad no es válida.</p>";
                exit();
            }

            // Aquí debes obtener los IDs de colonia, especialidad y género
            // Suponiendo que ya tienes las funciones para obtener esos IDs
            // Por ejemplo:
            $id_colonia = 1; // Cambiar por la lógica para obtener el ID real
            $id_especialidad = 1; // Cambiar por la lógica para obtener el ID real
            $id_genero = 1; // Cambiar por la lógica para obtener el ID real

            $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
                    VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";

            if ($conexion->query(query: $sql) === TRUE) {
                header(header: "Location: " . $_SERVER['PHP_SELF']);
                exit();
            } else {
                echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
            }
        }

        $sql = "SELECT
            a.numero_control,
            a.nombre,
            a.apellido_paterno,
            a.apellido_materno,
            e.edad,
            c.nombre_colonias,
            es.nombre_especialidad,
            g.nombre_genero,
            a.correo,
            a.telefono,
            a.fecha_ingreso 
            FROM alumnos a
            JOIN edades e ON a.id_edad = e.id
            JOIN colonias c ON a.id_colonia = c.id
            JOIN especialidades es ON a.id_especialidad = es.id
            JOIN generos g ON a.id_genero = g.id";
        $resultado = $conexion->query($sql);

        if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['numero_control']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['apellido_paterno']}</td>
                    <td>{$row['apellido_materno']}</td>
                    <td>{$row['edad']}</td>
                    <td>{$row['nombre_colonias']}</td>
                    <td>{$row['nombre_especialidad']}</td>
                    <td>{$row['nombre_genero']}</td>
                    <td>{$row['correo']}</td>
                    <td>{$row['telefono']}</td>
                    <td>{$row['fecha_ingreso']}</td>
                </tr>";
            }
        } else {
            echo "<p>No hay registros aún.</p>";
        }

        $conexion->close();
        ?>
    </table>
</div>
</body>
</html>
