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
            <link rel="stylesheet" href="style.css">
    
            <title>angel eduardo vazquez lopez</title>
        </head>
        <body>
       
            <nav class="navbar navbar-ligth" style="background-color: #006e90;">
            <div class="container">
                <a class="navbar-brand" href="index.html" style="color:#ecf39e;">Inicio</a>
                <!--boton de inicio que lleva a si mismo, de color blanco-->
                <!--a continuación es el menú drowdownd para poner las ligas a las prácticas -->
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./index.html" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">tripulacion</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">mostrar datos</a><br>
                            <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">mostras Datos</a><br>
                            <a class="dropdown-item" href="http://localhost/mapache/pablo3.php" style="color: #000;">meter Datos</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">cacahuate</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">Spractyica 4</a><br>
                            <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">practica 5</a><br>
                            <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">practica 6</a><br>
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
            <div class="jumbotron text-center" style="background-color: white;">
                <h1 class="display-4" style="font-family:'Apes On Parade', sans-serif; color: #0d8eb2;">Meter datos</h1>
                <h1>Ingresa los datos</h1>
                <div class="container1">
   
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="formulario">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br>
      <label for="edad">edad:</label>
      <input type="text" id="edad" name="edad" required><br>
      <label for="poder">poder:</label>
      <input type="text" id="poder" name="poder" required><br>
      <label for="rol">rol:</label>
      <input type="text" id="rol" name="rol" required><br>

      <input type="submit" value="Agregar registro">
    </form>



    <?php
    $username = "root";
    $password = "";
    $servername = "localhost"; 
    $database = "basededatos";
    $conexion = new mysqli($servername, $username, $password, $database);
    if ($conexion->connect_error) {
      die("La conexion fallo: " . $conexion->connect_error);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
      $nombre = $_POST["nombre"];
      $edad = $_POST["edad"]; 
      $poder = $_POST["poder"];
      $rol = $_POST["rol"];
      
      $sql = "INSERT INTO tripulacion (nombre, edad, poder, rol) VALUES ('$nombre', '$edad', '$poder', '$rol')";
      
      if ($conexion->query($sql) == TRUE) {
        echo "<p class='success'>Nuevo jugador agregado con éxito.</p>";
      } else {
        echo "<p class='error'>Error al agregar al Jugador:</p>" . $conexion->error . "<p>";
      }
    }
    //mostrar daos de la tabla
    $sql = "SELECT * FROM tripulacion ORDER BY id DESC";
    $resultado = $conexion->query($sql);
    ?>

   
  </div>

  <table>
                           <tr>
                                <th>Id</th>
                                <th>nombre</th>
                                <th>edad</th>
                                <th>poder</th>
                                <th>rol</th>
            
                            </tr>
                         <?php
                         if($resultado->num_rows >0){
                             while ($fila = $resultado->fetch_assoc()){
                                echo " <tr>
                                <td>" . $fila['id'] . "</td>
                                <td>" . $fila['nombre'] . "</td>
                                <td>" . $fila['edad'] . "</td>
                                <td>" . $fila['poder'] . "</td>
                                <td>" . $fila['rol'] . "</td>
                               </tr>";
                             }
                          }else{
                            echo "<tr> <td colspan='5'> no hay registrto aun </td><tr>";
                          }
                          
                            ?>

    </table>




                   

 <style>               
.container1{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    background-color: #282a36;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    color: white;
  }
  h1 {
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

                            
                </div>
                    
            </div>
        </body>
    </html>