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
          h1{
            text-align:center;
            color: #white;
            margin-bottom:20px;
          }
          table{
            width: 100%;
            border-collapse: collapse;
            margin-top: 50px;
            border-radius: 50px;
          }
          th, td{
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
          }
          tr:nth-child(even){
            background-color: skyblue;
            color: black;
          }
          tr:nth-child(odd){
            background-color: white;
            color: black
          }
          th{
            background-color: #ff3eff;
            color: white;
          }
            </style>
        <style>
          .container {
            display: flex;
            justify-content: center;
            align-items: center; /* Fixed typo here */
            width: 50%;
            background-color: #282a36;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            color: white;
        }
          h1,h2{
            font-family: 'so this is it', sans-serif;
            text-shadow: 0 1 1 black;
            text-align:center;
            color:#ff79c6;
            margin-bottom: 15px;
          }
          form{
            display:flex;
            flex-direction:column;
          }
          label{
            font-size:16px;
            margin-bottom:5px;
          }
          input[type="text"]{
            padding: 8px;
            margin-bottom:10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            background-color: #44475a;
            color:#fff;
          }

          input[type="submit"]{
            padding:10px;
            background-color: #50fa7b;
            border: none;
            color: #282a36;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
          }
          input[type="submit"]:hover{
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
    <nav class="navbar navbar-light" style="background-color: rgb(191, 196, 201);">
        <div class="container"></div>
    <a class="navbar-brand" href="/salazarabner/Abner.html" style="color: rgb(0, 15, 150);">Inicio</a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="nav navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" style="color: black;">
          Unidad 1
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/salazarabner/Abner.html">practica uno</a><br>
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
        <p style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">My name is Abner Salazar</p>
        <p class="lead">
        </p>
      </div>
</nav>
        
<table class="table table-bordered">
<thead>
    <tr>
        <th>Numero de Control</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Edad</th>
        <th>Colonia</th>
        <th>Especialidad</th>
        <th>Genero</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Fecha de Ingreso</th>
    </tr>
        </thead>
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
       
       
        if($resultado->num_rows >0){
          while($row= $resultado->fetch_assoc()){
            echo "<tr>
            <td> {$row['numero_control']}</td>
            <td> {$row['nombre']}</td>
            <td> {$row['apellido_paterno']}</td>
            <td> {$row['apellido_materno']}</td>
            <td> {$row['edad']}</td>
            <td> {$row['nombre_colonias']}</td>
            <td> {$row['nombre_especialidad']}</td>
            <td> {$row['nombre_genero']}</td>
            <td> {$row['correo']}</td>
            <td> {$row['telefono']}</td>
            <td> {$row['fecha_ingreso']}</td>
            
            </tr>";
          }
         }else{
          echo "<p> No hay registros aun.<p>";
           }
           $conexion->close();
            ?>
  </table>
</body>
</html>