<?php
ob_start();

$username = "root";
$password = "";
$servername = "localhost";
$database = "salazar";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Conexión Fallida: " . $conexion->connect_error);
}

function insertarPersonajes($conexion) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Id = $conexion->real_escape_string($_POST["Id"]);
        $Apellido = $conexion->real_escape_string($_POST["Apellido"]);
        $Nombre = $conexion->real_escape_string($_POST["Nombre"]);
        $Poder = $conexion->real_escape_string($_POST["Poder"]);
        $Descripcion = $conexion->real_escape_string($_POST["Descripcion"]);

        $sql = "INSERT INTO Personajes (id, Apellido, Nombre, Poder, Descripcion) VALUES ('$Id', '$Apellido', '$Nombre', '$Poder', '$Descripcion')";
        if ($conexion->query($sql) === TRUE) {
            echo "<p class='success'>Nuevo personaje agregado.</p>";
            header("Location: " . $_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "<p class='error'>Error al agregar al personaje: " . $conexion->error . "</p>";
        }
    }
}

insertarPersonajes($conexion);

$sql = "SELECT * FROM Personajes ORDER BY id DESC";
$resultado = $conexion->query($sql);
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
    <style>
        h1 { text-align: center; color: #ff79c6; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 50px; border-radius: 5px; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        tr:nth-child(even) { background-color: skyblue; color: black; }
        tr:nth-child(odd) { background-color: white; color: black; }
        th { background-color: #ff3eff; color: white; }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
            background-color: #282a36;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: white;
            margin: 0 auto;
        }
        form { display: flex; flex-direction: column; }
        label { font-size: 16px; margin-bottom: 5px; }
        input[type="text"] {
            padding: 8px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        input[type="submit"]:hover { background-color: #3ae374; }
        .success { color: #3ae374; }
        .error { color: #ff3e3e; }
    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: rgb(191, 196, 201);">
        <div class="container">
            <a class="navbar-brand" href="" style="color: rgb(0, 15, 150);">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <!-- Menú aquí -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron" style="background-color: rgb(210, 221, 231);">
        <h1 class="display-4" style="text-align: center; color: rgb(0, 75, 136); font-family: 'Break Love', sans-serif;">
            4-A De Programacion TM.
        </h1>
        <hr class="my-4" style="border-color: #658181;">
        <p class="lead" style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">
            Implementa Base De Datos Relacionales En Un Sistema De Informacion
        </p>
        <p style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">
            My name is Abner Salazar
        </p>
    </div>
    <div class="container">
        <h1>Meter Datos</h1>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" id="formulario">
            <label for="Id">Id:</label>
            <input type="text" id="Id" name="Id" required>
            <label for="Apellido">Apellido:</label>
            <input type="text" id="Apellido" name="Apellido" required>
            <label for="Nombre">Nombre:</label>
            <input type="text" id="Nombre" name="Nombre" required>
            <label for="Poder">Poder:</label>
            <input type="text" id="Poder" name="Poder" required>
            <label for="Descripcion">Descripcion:</label>
            <input type="text" id="Descripcion" name="Descripcion" required>
            <input type="submit" value="Agregar Registro">
        </form>
        <?php
        if ($resultado->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>id</th><th>Apellido</th><th>Nombre</th><th>Poder</th><th>Descripcion</th></tr>";
            while ($row = $resultado->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["Apellido"] . "</td><td>" . $row["Nombre"] . "</td><td>" . $row["Poder"] . "</td><td>" . $row["Descripcion"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No se encontraron registros.";
        }
        $conexion->close();
        ?>
    </div>
    <p style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">My name is Abner Salazar</p>
</body>
</html>