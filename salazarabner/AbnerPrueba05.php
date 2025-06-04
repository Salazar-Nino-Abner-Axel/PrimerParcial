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
    <link href="https://fonts.cdnfonts.com/css/break-love" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/jomolhari-2" rel="stylesheet">
    <title>Salazar Abner</title>
    <style>
        h1 {
            text-align: center;
            color: #ff79c6;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 5px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:nth-child(even) {
            background-color: skyblue;
            color: blue;
        }
        tr:nth-child(odd) {
            background-color: white;
            color: black;
        }
        th {
            background-color: #ff3eff;
            color: white;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 50%;
            background-color: #282a36;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: white;
        }
        h1, h2 {
            font-family: 'so this is it', sans-serif;
            text-shadow: 0 1 1 black;
            text-align: center;
            color: #ff79c6;
            margin-bottom: 15px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 16px;
            margin-bottom: 5px;
        }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #44475a;
            color: #fff;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #50fa7b;
            border: none;
            color: #282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #3ae374;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color:#36a7bb;">
        <div class="contener">
            <a class="navbar-brand" href="" style="color: rgb(202, 76, 76);">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 1
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/salazarabner/Abner.php">practica uno</a><br>
                            <a class="dropdown-item" href="salazarabner/Abner02.php">practica dos</a><br>
                            <a class="dropdown-item" href="salazarabner/Abner03.php">practica tres</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 2
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/Abner01.html">practica cuatro</a><br>
                            <a class="dropdown-item" href="/Abner02.html">practica cinco</a><br>
                            <a class="dropdown-item" href="/Abner03.html">practica seis</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Unidad 3
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="/Abner01.html">practica siete</a><br>
                            <a class="dropdown-item" href="/Abner02.html">practica ocho</a><br>
                            <a class="dropdown-item" href="/Abner03.html">practica nueve</a><br>
                            <a class="dropdown-item" href="/Abner03.html">practica diez</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron">
        <h1>PAGINA DE MOSTRAR DATOS RELACIONADOS</h1>
        <div class="container">
        <div class="container1">
            <form method="POST" id="formulario"> 

                <label for="numero_control">Numero de control:</label>
                <input type="text" id="numero_control" name="numero_control" required><br>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required><br>
                <label for="apellido_paterno">Apellido paterno:</label>
                <input type="text" id="apellido_paterno" name="apellido_paterno" required><br>
                <label for="apellido_materno">Apellido materno:</label>
                <input type="text" id="apellido_materno" name="apellido_materno" required><br>
                
                <label for="id_edad">Edad:</label>
                <select name="edad" required>
                    <option value="">Seleccione una edad</option>
                    <?php while ($row = $result_edad->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["edad"] . "</option>";
                    } ?>
                </select><br><br>

                <label for="id_colonia">Colonia:</label> <!--quito nombre_ y el id_-->
                <select name="colonia" required>
                    <option value="">Seleccione una colonia</option>
                    <?php while ($row = $result_colonias->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre_colonias"] . "</option>";
                    } ?>
                </select><br><br>

                <label for="id_especialidad">Especialidad:</label><!--esta como espeialidades al principio y solo specialidad al final-->
                <select name="especialidad" required>
                    <option value="">Seleccione una especialidad</option>
                    <?php while ($row = $result_especialidades->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre_especialidad"] . "</option>";
                    } ?>
                </select><br><br>

                <label for="id_genero">Genero:</label>
                <select name="genero" required>
                    <option value="">Seleccione un género</option>
                    <?php while ($row = $result_generos->fetch_assoc()){
                        echo "<option value='" . $row["id"] . "'>" . $row["nombre_genero"] . "</option>";
                    } ?>
                </select><br><br>

                <label for="correo">Correo:</label>
                <input type="text" id="correo" name="correo" required><br>
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" required><br>
                <label for="fecha_ingreso">Fecha ingreso:</label>
                <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br>
                
                <input type="submit" value="Agregar Registro">
            </form>
                </div>
        </div>
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

        function insertarAlumno($conexion) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                var_dump($_POST);
                $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
                $nombre = $conexion->real_escape_string($_POST["nombre"]);
                $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
                $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
                $edad = $conexion->real_escape_string($_POST["id_edad"]);
                $colonia = $conexion->real_escape_string($_POST["id_colonia"]);
                $especialidad = $conexion->real_escape_string($_POST["id_especialidad"]);
                $genero = $conexion->real_escape_string($_POST["id_genero"]);
                $correo = $conexion->real_escape_string($_POST["correo"]);
                $telefono = $conexion->real_escape_string($_POST["telefono"]);
                $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

                $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso)
                VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad', '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";

                if ($conexion->query($sql) === TRUE) {
                    echo "<p class='success'>Nuevo alumno agregado con éxito.</p>";
                    header("location: " . $_SERVER['PHP_SELF']);
                    exit();
                }
            }
        }
        insertarAlumno($conexion);

        $sql = "SELECT * FROM alumnos";
        $resultado = $conexion->query($sql);
        if ($resultado->num_rows > 0) {
            echo "<table class='table table-bordered'>";
            echo "<tr><th>Numero de control</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Edad</th><th>Colonia</th><th>Especialidad</th><th>Genero</th><th>Correo</th><th>Telefono</th><th>Fecha de ingreso</th></tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr>
                <td>" . $row["numero_control"] . "</td>
                <td>" . $row["nombre"] . "</td>
                <td>" . $row["apellido_paterno"] . "</td>
                <td>" . $row["apellido_materno"] . "</td>
                <td>" . $row["id_edad"] . "</td>
                <td>" . $row["id_colonia"] . "</td>
                <td>" . $row["id_especialidad"] . "</td>
                <td>" . $row["id_genero"] . "</td>
                <td>" . $row["correo"] . "</td>
                <td>" . $row["telefono"] . "</td>
                <td>" . $row["fecha_ingreso"] . "</td>
                </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No se encontraron registros en la base de datos.</p>";
        }
        $conexion->close();
        ?>
</body>
</html>
