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
          <a class="dropdown-item" href="salazarabner/Abner02.php">practica dos</a><br>
          <a class="dropdown-item" href="salazarabner/Abner03.php">practica tres</a><br>
         </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" style="color: black;">
          Unidad 2
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/Abner01.html">practica cuatro</a><br>
          <a class="dropdown-item" href="/Abner02.html">practica cinco</a><br>
          <a class="dropdown-item" href="/Abner03.html">practica seis</a><br>
         </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" style="color: black;">
          Unidad 3
        </a>
         <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/salazarabner/Abner07.html">practica siete</a><br>
          <a class="dropdown-item" href="/Abner02.html">practica ocho</a><br>
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
          
        <?php
        $username = "root";
        $password = "";
        $servername = "localhost";
        $database = "salazar";

        $conexion = new mysqli($servername, $username, $password, $database);
        if($conexion->connect_error){
            die("Conexion Fallida: " .  $conexion->connect_error);
        }
        $sql = "SELECT * FROM salazar";
        $resultado = $conexion->query($sql)
        ?>
        <div class="container">
            <h1>datos</h1>
            <?php if ($resultado->num_rows >0):?>
              <table>
                <tr>
                  <th>id</th>
                  <th>nombre</th>
                  <th>apellido</th>
                  <th>poder</th>
            </tr>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellido']; ?></td>
                <td><?php echo $fila['poder']; ?></td>
            </tr>
            <?php endwhile; ?>
            </table>
            <?php else: ?>
              <p>No se</p>
            <?php endif; ?>
    </div>

        <hr class="my-4" style="border-color: #658181;">
        <p class="lead" style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;" >
        Implementa Base De Datos Relacionales En Un Sistema De Informacion</p>
        <p style="text-align: center; color: black; font-family: 'Jomolhari', sans-serif;">My name is Abner Salazar</p>
        <p class="lead">
        </p>
      </div>
</nav>
<div class="row" style="display: flex">
<div class="col-sm-4">
    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-header">Practica 1</div>
        <div class="card-body">
              <h5 class="card-title">Ta curioson el diseño xd</h5>
              <p class="card-text">hello.</p>
        </div>
        </div>
        <div class="row" style="display: flex">
            <div class="col-sm-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Practica 1</div>
                    <div class="card-body">
                          <h5 class="card-title">Ta curioson el diseño xd</h5>
                          <p class="card-text">hello.</p>
                    </div>
                    </div>
    </div>
</body>
</html>