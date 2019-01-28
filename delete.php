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
  <a class="navbar-brand" href="inicio.html">Equipos de fútbol</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="formulari1.php">Insertar <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulari3.php">Modificar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formulari2.php">Eliminar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mostrar1.php">Mostrar por nombre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Mostrar2.php">Equipos y titulos</a>
      </li>
    </ul>
  </div>
</nav>

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "futbol";

	$codi = $_REQUEST['codi'];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
			$sql = "DELETE FROM equips
					WHERE codi = " . $codi;

			if ($conn->query($sql) === TRUE) {
				echo "Registre eliminat amb èxit";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
?>
    </body>
    
</html>