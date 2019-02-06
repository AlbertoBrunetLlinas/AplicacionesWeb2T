<html>

    <head>
    
        <title>Ordenados por nombre</title>
        <meta charset="utf-8">
        
        <meta name="description" content="Actividad 5.7 Apliaciones Web. Equipos de Fútbol.">
        
        <meta name="keywords" content="Actividad, Actividad 5.7, 5.7, Ejercicio">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    </head>
    
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Equipos de fútbol</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="formulari1.php">Insertar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="">Modificar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulari2.php">Eliminar</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="mostrar1.php">Mostrar por nombre</a>
          <a class="dropdown-item" href="mostrar2.php">Equipos y titulos</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
        
        
    <table class="table table-hover table-dark">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "futbol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT codi, nom, escut, web, localitat FROM equips ORDER BY nom ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<th>Equip</th> <th>Localitat</th> <th>Web</th> <th>Escut</th>";

    while($row = $result->fetch_assoc()) {
        if($row["escut"] == null){
            $escut="No hay foto";
        }else{
            $escut="<img src='". $row["escut"]. "'>";
        }
         if($row["web"] == null){
            $web="No hay web";
        }else{
            $web="<a target='_blank' href='". $row["web"]. "'>Página oficial</a>";
        }
        
        echo "<tr>
        <td>". $row["nom"]. "</td> 
        <td>". $row["localitat"]. "</td> 
        <td>".$web."</td>
        <td>".$escut."</td> </tr>";
    }
    

    

} else {
    echo "0 results";
}
$conn->close();
?>  
    
</table>
    </body>
</html>