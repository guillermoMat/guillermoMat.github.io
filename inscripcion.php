
<!--       guardamos las citas  -->
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombrePadre = $_POST["nombrePadre"];
    $nombreMadre = $_POST["nombreMadre"];
    $telefono = $_POST["telefono"];
    $comentario = "Padre: " . $nombrePadre . "- Madre: " . $nombreMadre . "- Telefono: ". $telefono."\n\n" ;

    // Abre el archivo de comentarios (o crea uno si no existe)
    $archivo = fopen("solicitudCitas.txt", "a");

    if ($archivo) {
        fwrite($archivo, $comentario);
        fclose($archivo);
        echo "Solicitud de cita agendada correctamente.";
    } else {
        echo "Error al guardar cita.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>


<!--       definimos la estructura html para agendar cita  -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="display-5 fw-bolder" style="text-align: center;margin-top: 20px;margin-left: 40px;text-decoration:underline">Agendar cita</h1>
                    </div>
<div class="container mt-5" style="margin-bottom: 20px;">
  
  <h4>Dejenos sus datos para que la institución organice una cita para poder empezar con los tramites correspondientes.</h4>
  <form method="post" action="inscripcion.php">
    <div class="form-group">
      <label for="nombre">Nombre del padre:</label>
      <input type="text" class="form-control" id="nombre" name="nombrePadre" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="nombre">Nombre de la madre:</label>
      <input type="text" class="form-control" id="nombre" name="nombreMadre" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="nombre"> Teléfono:</label>
      <input type="text" class="form-control" id="nombre" name="telefono" autocomplete="off">
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar datos">
  </form>
</div>


<!-- footer     -->
<footer>
<div class="copyright py-4 text-center" style="background-color:#1b263b;margin-top: 100px;">
            <div class="container"><a href="index.php">Volver Inicio</a></div>
        </div>
        </footer>

    


    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>