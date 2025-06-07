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
                            <a class="dropdown-item" href="http://localhost/mapache/index.php" style="color: #000;">meter Datos</a><br>
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
                <h1 class="display-4" style="font-family:'Apes On Parade', sans-serif; color: #0d8eb2;">tripulacion oficial</h1>
                <?php 
                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "basededatos";

                $conexion = new mysqli( $servername,$username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexion Fallida: " . $conexion->connect_error);
                }
                $sql = "SELECT * FROM tripulacion"; //aqui agregan el nombre de la tabla que estan usando, en mi caso fue nfleast//
                $resultado = $conexion-> query($sql);
                ?>

                <div class="container">
                   

                <style>
                          h1{
                          text-align: center;
                          color: #f9f7f3; 
                           margin-bottom: 20px;
                                  }
                                  table{
                                      width:100%;
                                      border-collapse: collapse;
                                      margin-top: 50px;
                                      border-radius: 50px;
                                  }
                                  th, td{
                                      padding: 10px;
                                      text-align:left;
                                      border-bottom: 1px solid #ddd;
                                  }
                                  tr:nth-child(even){
                                      background-color: #b5e2fa;
                                      color: black;
                                  }
                                  tr:nth-child(odd){
                                      background-color: #eddea4; 
                                      color: black;
                                  }
                                  th{
                                      background-color: #0fa3b1; 
                                      color: white;
                                  }
                              </style>


                    <?php if($resultado-> num_rows >0):?>
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>nombre</th>
                                <th>edad</th>
                                <th>poder</th>
                                <th>rol</th>
                              
                            </tr>

                            <?php while($fila= $resultado->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $fila['id']; ?></td>
                                    <td><?php echo $fila['nombre']; ?></td>
                                    <td><?php echo $fila['edad']; ?></td>
                                    <td><?php echo $fila['poder']; ?></td>
                                    <td><?php echo $fila['rol']; ?></td>
                                    
                                </tr>
                                <?php endwhile; ?>
                        </table>
                        <?php else: ?>
                            <p>No se encontraron los personajes</p>
                            <?php endif; ?>
                            
                </div>
                    
            </div>
        </body>
    </html> 