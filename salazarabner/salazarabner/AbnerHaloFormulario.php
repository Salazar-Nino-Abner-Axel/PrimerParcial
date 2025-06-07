<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "halodb";
        $conexion = new mysqli($servername, $username, $password, $database);
        if ($conexion->connect_error) {
                die("La conexión falló: " . $conexion->connect_error);
            }

            $sql_rangos = "SELECT id, nombre_rango FROM Rangos";
            $result_rangos = $conexion->query($sql_rangos);
            $sql_mapas = "SELECT id, nombre_mapa FROM Mapas";
            $result_mapas = $conexion->query($sql_mapas);
            $sql_armas = "SELECT id, nombre_arma FROM Armas";
            $result_armas = $conexion->query($sql_armas);
            $sql_facciones = "SELECT id, nombre_faccion FROM Facciones";
            $result_facciones = $conexion->query($sql_facciones);
            $sql_ids = "SELECT id, nombre_id FROM IDs";
            $result_ids = $conexion->query($sql_ids);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gamertag = mysqli_real_escape_string($conexion, $_POST['gamertag']);
    $nivel = mysqli_real_escape_string($conexion, $_POST['nivel']);
    $nombre_personaje = mysqli_real_escape_string($conexion, $_POST['nombre_personaje']);
    $bando = mysqli_real_escape_string($conexion, $_POST['bando']);
    $id_rango = mysqli_real_escape_string($conexion, $_POST['id_rango']);
    $id_mapa = mysqli_real_escape_string($conexion, $_POST['id_mapa']);
    $id_arma = mysqli_real_escape_string($conexion, $_POST['id_arma']);
    $id_faccion = mysqli_real_escape_string($conexion, $_POST['id_faccion']);
    $id_identificador = mysqli_real_escape_string($conexion, $_POST['id_identificador']);
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']);
    $fecha_registro = mysqli_real_escape_string($conexion, $_POST['fecha_registro']);

    $sql = "INSERT INTO Spartans (gamertag, nivel, nombre_personaje, 
                        bando, id_rango, id_mapa, 
                        id_arma, id_faccion, id_identificador, 
                        correo, telefono, fecha_registro)
           VALUES ('$gamertag', '$nivel', '$nombre_personaje', 
                    '$bando', '$id_rango', '$id_mapa', '$id_arma', 
                    '$id_faccion', '$id_identificador', 
                    '$correo', '$telefono', '$fecha_registro')";

    if ($conexion->query($sql) === TRUE) {
        echo "<p class='text-success'>Nuevo Spartan agregado con éxito</p>";
    } else {
        echo "<p class='text-danger'>Error: " . $sql . "<br>" . $conexion->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
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
</head>
<body>

<style>
        body {
            background-color: #0d1117;
            color: #c9d1d9;
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        h1, h2 {
            color:rgb(29, 145, 35);
            text-align: center;
        }
        .form-container {
            background-color: #161b22;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 40px;
        }
        .form-container input,
        .form-container select {
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            background-color: #0d1117;
            color: #c9d1d9;
            border: 1px solid #30363d;
            border-radius: 5px;
        }
        .form-container input[type="submit"] {
            background-color: #238636;
            border: none;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-container input[type="submit"]:hover {
            background-color: #2ea043;
        }
        table {
            width: 200%;
            background-color:rgb(79, 91, 109);
            border-collapse: collapse;
            justify-content: center
        }
        table th, table td {
            border: 1px solid #30363d;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color:rgb(29, 145, 35)
        }
    </style>

</head>
<body>
<nav class="navbar navbar-light" style="background-color: rgb(191, 196, 201);">
        <div class="container"></div>
    <a class="navbar-brand" href="" style="color: rgb(0, 15, 150);">Inicio</a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" style="color: black;">
          Unidad 1
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/salazarabner/Abner.php">practica uno</a><br>
          <a class="dropdown-item" href="/salazarabner/Abner02.php">practica dos</a><br>
          <a class="dropdown-item" href="/salazarabner/Abner03.php">practica tres</a><br>
         </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" style="color: black;">
          Unidad 2
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/salazarabner/Abner04.php">practica cuatro</a><br>
          <a class="dropdown-item" href="/salazarabner/AbnerHaloFormulario.php">practica cinco</a><br>
          <a class="dropdown-item" href="/salazarabner/Pokedex1.html">practica seis</a><br>
         </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" style="color: black;">
          Unidad 3
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/salazarabner/Abner07.html">practica siete</a><br>
          <a class="dropdown-item" href="/salazarabner/Abner08.html">practica ocho</a><br>
          <a class="dropdown-item" href="/Abner03.html">practica nueve</a><br>
          <a class="dropdown-item" href="/Abner03.html">practica diez</a><br>
         </div>
      </li>
    </ul>
    </div>
  </div>
    <div class="jumbotron" style="background-color: rgb(210, 221, 231);">
        <h1 class="display-4" style="text-align: center; color: rgb(0, 75, 136); font-family: 'Break Love', sans-serif;">
        4-A De Programacion TM.</h1>
        <hr class="my-4" style="border-color: #658181;">
        <p class="lead" style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;" >
        Implementa Base De Datos Relacionales En Un Sistema De Informacion</p>

<div class="container">
    <div class="form-container mb-5">
        <h1>Spartan Registry</h1>
        <form method="POST" id="formulario">
            <label for="gamertag">Gamertag:</label>
            <input type="text" id="gamertag" name="gamertag" required>
            <label for="nivel">Nivel:</label>
            <input type="number" id="nivel" name="nivel" required>
            <label for="nombre_personaje">Nombre del Personaje:</label>
            <input type="text" id="nombre_personaje" name="nombre_personaje" required>
            <label for="bando">Bando:</label>
            <input type="text" id="bando" name="bando" required>
            <label for="id_rango">Rango:</label>

            <select name="id_rango" id="id_rango" required>
                <option value="">Seleccione un rango</option>
                <?php while ($row = $result_rangos->fetch_assoc()) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre_rango'] ?></option>
                <?php } ?>
            </select>
            <label for="id_mapa">Mapa Favorito:</label>
            <select name="id_mapa" id="id_mapa" required>
                <option value="">Seleccione un mapa</option>
                <?php while ($row = $result_mapas->fetch_assoc()) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre_mapa'] ?></option>
                <?php } ?>
            </select>
            <label for="id_arma">Arma Favorita:</label>
            <select name="id_arma" id="id_arma" required>
                <option value="">Seleccione un arma</option>
                <?php while ($row = $result_armas->fetch_assoc()) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre_arma'] ?></option>
                <?php } ?>
            </select>
            <label for="id_faccion">Facción:</label>
            <select name="id_faccion" id="id_faccion" required>
                <option value="">Seleccione una facción</option>
                <?php while ($row = $result_facciones->fetch_assoc()) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre_faccion'] ?></option>
                <?php } ?>
            </select>
            <label for="id_identificador">Identificador:</label>
            <select name="id_identificador" id="id_identificador" required>
                <option value="">Seleccione un identificador</option>
                <?php while ($row = $result_ids->fetch_assoc()) { ?>
                    <option value="<?= $row['id'] ?>"><?= $row['nombre_id'] ?></option>
                <?php } ?>
            </select>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>
            <label for="fecha_registro">Fecha de Registro:</label>
            <input type="date" id="fecha_registro" name="fecha_registro" required>
            <input type="submit" value="Agregar Spartan">
        </form>
    </div>

    <h2>Lista de Spartans Registrados</h2>
        <table class="table table-bordered text-center align-middle">
                <tr>
                    <th>Gamertag</th>
                    <th>Nivel</th>
                    <th>Nombre del Personaje</th>
                    <th>Bando</th>
                    <th>Rango</th>
                    <th>Mapa Favorito</th>
                    <th>Arma Favorita</th>
                    <th>Facción</th>
                    <th>Identificador</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Fecha de Registro</th>
                </tr>
            
                <?php
                $sql = "SELECT s.gamertag,
                        s.nivel,
                        s.nombre_personaje,
                        s.bando, r.nombre_rango, 
                        m.nombre_mapa,
                        a.nombre_arma,
                        f.nombre_faccion,
                        i.nombre_id, 
                        s.correo,
                        s.telefono,
                        s.fecha_registro
                        FROM Spartans s
                        JOIN Rangos r ON s.id_rango = r.id
                        JOIN Mapas m ON s.id_mapa = m.id
                        JOIN Armas a ON s.id_arma = a.id
                        JOIN Facciones f ON s.id_faccion = f.id
                        JOIN IDs i ON s.id_identificador = i.id";
                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>{$row['gamertag']}</td>";
                        echo "<td>{$row['nivel']}</td>";
                        echo "<td>{$row['nombre_personaje']}</td>";
                        echo "<td>{$row['bando']}</td>";
                        echo "<td>{$row['nombre_rango']}</td>";
                        echo "<td>{$row['nombre_mapa']}</td>";
                        echo "<td>{$row['nombre_arma']}</td>";
                        echo "<td>{$row['nombre_faccion']}</td>";
                        echo "<td>{$row['nombre_id']}</td>";
                        echo "<td>{$row['correo']}</td>";
                        echo "<td>{$row['telefono']}</td>";
                        echo "<td>{$row['fecha_registro']}</td>";
                        echo "</tr>";
                    }
                }
                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
</div>
<p style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">My name is Abner Salazar</p>
        <p class="lead">
        </p>
      </div>
</nav>
</body>
</html>