<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "aevl";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["categoria"];

    $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p style='color:green;'>Producto agregado recientemente</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
    }
}

$sql_categorias = "SELECT * FROM categorias";
$result_categorias = $conexion->query($sql_categorias);
?>

<!DOCTYPE html>

    <html>
     <head>
    <title>Pagina de prueba</title>
</head>
<body>
     <h1>Registrar Productos</h1>
     <form method = "POST">
        <label>Nombre del producto: </label>
         <input type="text" name="nombre" required><br><br>
         <label>Precio: </label>
        <input type="number" name="precio" required><br><br>
         <label>Categoria: </label>
        <select name="categoria" required>
<option value="">Seleccionar una categoria</option>
<?php
if($result_categorias->num_rows > 0){
 while($row = $result_categorias->fetch_assoc()){
 echo "<option value'" . $row["id"] . "'>". $row["nombre"] . "</option>";
 }
}
?>
</select><br><br>
<input type="submit" value="Agregar producto">
</form>
<h2>Lista de Productos</h2>
<table>
   <tr>
         <th>Nombre</th>
         <th>Precio</th>
         <th>Categoria</th>
</tr>
<?php
$sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id";
$result_productos = $conexion->query($sql_productos);
if($result_productos->num_rows>0){
 while($row = $result_productos ->fetch_assoc()){
 echo "<tr>
 <th>{$row['nombre']}</th>
 <th>{$row['precio']}</th>
 <th>{$row['categoria']}</th>
</tr>";
 }
}else{
 echo "<tr><td>No hay productos registrados</td></tr>";
}
?>
</body>
</html>
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