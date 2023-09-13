
<!--       guardamos los comentarios  -->
<?php



if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"];
    $comentario = $_POST["comentario"];
    $comentario = "Nombre: " . $nombre . "\n    -      Comentario: " . $comentario . "\n\n";

    // Abre el archivo de comentarios (o crea uno si no existe)
    $archivo = fopen("comentarios.txt", "a");

    if ($archivo) {
        fwrite($archivo, $comentario);
        fclose($archivo);
        echo "Comentario guardado correctamente.";
    } else {
        echo "Error al guardar el comentario.";
    }
}

//para el boton de iniciar/cerrar sesion, tienen que ir al principio de cualquier otro codigo o sino da error
session_start();

// Verificar si el usuario está autenticado
/*
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: login.php");
    exit();
}
*/
/* Cerrar la sesión cuando se hace clic en el botón de "Cerrar sesión"
if (isset($_POST["cerrar_sesion"])) {
    session_destroy(); // Destruir todas las sesiones
    header("Location: login.php");
    exit();
}
*/

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

     <!-- Font Awesome icons (free version)-->
     <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php
include 'barraNavegacion.php';

?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">







                <!-- Barra de navegacion -->

<nav class="navbar navbar-expand-sm navbar-dark bg-primary" style="float: right;margin-top:5px">


<!-- botones Inicio/Cerrar sesion -->

<?php
// Inicia la sesión (asegúrate de hacerlo antes de cualquier salida al navegador)

//session_start();

// Verifica si el usuario ha iniciado sesión (por ejemplo, comprobando si existe una variable de sesión)
if (isset($_SESSION['usuario'])) {
    echo '<form method="POST" action="cerrar_sesion.php">
              <input type="submit" name="cerrar_sesion" class="btn btn-danger" value="Cerrar sesión">
          </form>';
} else {
    echo '<form method="POST" action="iniciar_sesion.php">
              <input type="submit" name="iniciar_sesion" class="btn btn-success" value="Iniciar sesión">
          </form>';
}
?>


    <a class="navbar-brand"  style="margin-left:30px">Redes sociales</a>

    <div class="collapse navbar-collapse" id="collapsibleNavId" style="float: right;">

    <div style="float: right;">
                <!-- Facebook -->
<a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/" role="button target="_blank""
  ><i class="fab fa-facebook-f"></i
></a>




<a class="btn btn-primary" style="background-color: #dd4b39;" href="https://outlook.live.com/owa/" role="button" target="_blank" title="paratransformare@gmail.com">
  <i class="fas fa-envelope"></i>
</a>



<!-- Whatsapp -->
<a class="btn btn-primary" style="background-color: #25d366;" href="https://web.whatsapp.com/" role="button target="_blank""
  ><i class="fab fa-whatsapp"></i
></a>

</div>

    </div>
</nav>


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="display-5 fw-bolder" style="text-align: center;margin-bottom: 20px;margin-left:20px;margin-top:100px;text-decoration:underline;">Bienvenidos</h1>
                    </div>









                    <!-- Content Row -->
                    <div class="row">

                    <div class="col-lg-3 mb-4">
                         <!--
                        <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-primary">Titulo 2</h6>

                                    <div class="dropdown no-arrow">
                                         linea divisora
                                    </div>

                                </div>
                                -->


                        </div>

                        <!-- Content Column  ---
                    <div class="col-md-6 "><img class="card-img-top mb-5 mb-md-0" src="img/logo 2.png" alt="..." /></div>
                    -->
                        <div class="col-lg-4 mb-4" "> <!-- style="background-color:#457b9d;  -->


                      <!-- class="card-img-top mb-5 mb-md-0"

                    width="150" height="250"
                -->

                            <!-- Project Card Example -->

                            <img class="card-img-top mb-5 mb-md-0" src="img/logo redondo.png" alt="..." style="align-items: center;" width="50" height="250"/>
                            <p style="background-color: rgba(255, 255, 255, 0.5); padding: 10px;">
                            Inspiramos, desafiamos y empoderamos a todos nuestros alumnos a ser miembros comprometidos y éticos de una comunidad global.
                            Para que se conviertan en agentes de cambio conscientes de sí mismos,seguros, innovadores y colaborativos.
                            </p>


                        </div>


                    </div>

                </div>
                <!-- /.container-fluid -->



                <!-- MAPA - UBICACION -->

                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="display-5 fw-bolder" style="text-align: center;margin-top: 20px;margin-left: 40px;text-decoration:underline">Ubicación</h1>
                    </div>

                <div class="mapouter" style="margin:15px;overflow: hidden;width:90%">
                    <div class="gmap_canvas" style="width:90%;margin:15px">
                        <iframe  width="90%" height="560" style="margin:15px" id="gmap_canvas" src="https://maps.google.com/maps?q=C.+French+414%2C+H3506+Resistencia%2C+Chaco&t=&z=14&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

                        </iframe>
                        <a href="https://timenowin.net/">online clock</a>
                        <br>
                        <a href="https://alarmclock.cloud/"></a>
                        <br>
                        <a href="https://www.onclock.net/"></a>
                        <br>
                        <style>.mapouter{position: relative;text-align: right;height: 560px;width: 820px;}</style>
                        <a href="https://www.embedmaps.co">embed google maps</a>
                        <style>.gmap_canvas{overflow: hidden;background: none !important;height: 560px;width: 820px;}</style>

                    </div>

                </div>

            <!--       COMENTARIOS  -->

            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="display-5 fw-bolder" style="text-align: center;margin-top: 20px;margin-left: 40px;text-decoration:underline">Comentarios</h1>
                    </div>

            <!--       MOSTRAR COMENTARIOS  -->

            <div class="container mt-5">

                    <div class="container mt-5">
                        <h2>Comentarios realizados</h2>
                    </div>

  <?php
  $comentarios = file_get_contents("comentarios.txt");
  $comentarios = explode("\n\n", $comentarios);

  foreach ($comentarios as $comentario) {
      echo "<div class='card mb-2'>";
      echo "<div class='card-body'>$comentario</div>";
      echo "</div>";
  }
  ?>
</div>



<!--       definimos la estructura html para hacer los comentarios  -->

            <div class="container mt-5" style="margin-bottom: 20px;">
  <h2>Realiza tu comentario</h2>
  <form method="post" action="index.php">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" class="form-control" id="nombre" name="nombre" autocomplete="off">
    </div>
    <div class="form-group">
      <label for="comentario">Comentario:</label>
      <textarea class="form-control" id="comentario" name="comentario" rows="4"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Enviar comentario">
  </form>
</div>




            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

 <!-- Footer-->
 <footer class="footer text-center">
            <div class="container">
            <h4 style="text-decoration: underline"><b>DEVELOPERS</b></h4>
            <br/>
                <div class="row">
                    <!-- Footer Location-->

                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Lucas Luque</h4>
                        <p class="lead mb-0">
                        <a href="https://www.linkedin.com/in/lucasluqueencina" target="_blank">LinkedIn
                        <i class="fab fa-linkedin"></i>
                        </a>
                        </p>
                    </div>

                  <!-- Footer Location-->
                  <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Paula Piedra</h4>
                        <p class="lead mb-0">
                        <a href="https://www.linkedin.com/in/pauliipiedra/" target="_blank">LinkedIn
                        <i class="fab fa-linkedin"></i>
                        </a>
                        </p>
                    </div>

                    <!-- Footer Location-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">Guillermo Mathieu</h4>
                        <p class="lead mb-0">
                        <a href="https://www.linkedin.com/in/guillermo-mathieu-b547a124a" target="_blank">LinkedIn
                        <i class="fab fa-linkedin"></i>
                        </a>

                        </p>
                    </div>



                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
