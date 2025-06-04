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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abner</title>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color:#36a7bb;">
    <div class="contener">
        <a class="navbar-brand" href="" style="color: rgb(202, 76, 76);">Inicio</a>
        <!-- Un boton de inicio que lleva a si mismo, de color blanco, aqui pueden poner el color que quieran dependiendo de su estilo -->
       
        <!-- A continuacion es el menu dropdown para poner las ligas a las practicas -->
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="nav navbar-nav">
           <li class="nav-item dropdown">
             <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Unidad 1
             </a>
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
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
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
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
             <!-- Lo que sigue son los menus que se van a desplegar hacia abajo, cada uno tendra el nombre de su practica, ejemplo, practica uno se llamara su nombre el numero de la practica ZZ terminando con HTML -->
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
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
<?php




 error_reporting(E_ALL);
       ini_set('display_errors',1);
       

       $username = "root";
       $password = "";
       $servername = "localhost";
       $database = "escuela";
            $conexion = new mysqli($servername, $username, $password, $database);
            if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }
            $sql_edad = "SELECT id, edad FROM edades";
            $sql_edad = "SELECT id, colonia FROM colonias";
            $sql_edad = "SELECT id, especialades FROM especialidades";
            $sql_edad = "SELECT id, genero FROM generos";

            $resultado_edad = $conexion->query($sql_edad)
            $resultado_edad = $conexion->query($sql_colonias)
            $resultado_edad = $conexion->query($sql_especialidades)
            $resultado_edad = $conexion->query($sql_genero)

            $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno
            , edad, colonia, especialidad, genero, correo, telefono, fecha_ingreso)

            VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$edad',
              '$colonia', '$especialidad', '$genero', '$correo', '$telefono', '$fecha_ingreso')";
            
            if ($conexion->query($sql) ==  TRUE) {
                echo "<p class='success'>Nuevo alumno agregado con exito.</p>";
                header("location: " . $_SERVER['PHP_SELF']);
                exit();

            }else{
                echo "<p class='error'>Error al agregar con exito.</p>";
            }
        }
        
?>