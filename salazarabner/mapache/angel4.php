<!DOCTYPE html>
<html lang="en">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

      <style>

        h1{
          text-align: center;
          color: royalblue;
          margin-bottom: 20px;
        }
        table{
          width: 100%;
          border-collapse: collapse;
          margin-top: 50px;
          border-radius:50px;
        }
        th, td{
          padding:10px;
          text-align: left;
          border-bottom:1.5px solid pink;
        }
        tr:nth-child(even){
          background-color: crimson;
          color: white;
        }
        tr:nth-child(odd){
          background-color: royalblue;
          color: black;
        }


        <style>
h1{

text-align:center;
color:# rgb(22, 27, 21);
margin: bottom: 20px;
}
table{
width : 100% ;
border-collapse: collapse;
margin-top: 50px;
border-radius:50px;
}
th, td {
padding:10px;
text-align:left;
border-bottom: 1px solid #ddd;
}
tr:nth-child(even){
background-color: rgb(69, 139, 168);
color: black ;  
}
tr:nth-child(odd){
background-color:white;
color:black;
}
th{
background-color:#ff3eff;
color:white;
}


 </style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victor Manuel Vidal Resendiz</title>
</head>
<body>
<link href="https://fonts.cdnfonts.com/css/noto-serif-display" rel="stylesheet">
                
                <nav class="navbar navbar-ligth" style="background-color: #006e90;">
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
       <h1>ESCUELAS SECUMDARIAS TECNICAS </h1>
<div class="container1">
    
        </div>

<table class="table table-bordered">

</form>


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
    
    //LAS QUE TIENEN LA LETRA "a" PERTENECEN A LA TABLA PRINCIPAL LLAMADA "alumnos"
    //LAS DEMAS LETRAS SON DE ESAS TALAS, COMO "e" de edades, la de "c" de colonias
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