




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienestar Estudiantil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">

<style>
    .swiffy-slider {
  max-width: 1000px; /* Ancho máximo deseado para el carrusel */
  margin: 0 auto; /* Centrar horizontalmente el carrusel */
}

.slider-container {
  list-style: none;
  padding: 0;
  margin: 0;
  overflow: hidden;
  position: relative;
  white-space: nowrap;
  text-align: center; /* Alinea los elementos del carrusel al centro */
}

.slider-container li {
  display: inline-block;
}

.slider-nav,
.slider-nav-next {
    
    background-color: black;
  color: white; /* Cambia el color del texto a blanco */
  border: none; /* Elimina los bordes si los hubiera */
  padding: 5px 10px; /* Ajusta el relleno según tus preferencias */
  border-radius: 4px; /* Agrega esquinas redondeadas si lo deseas */
  cursor: pointer;
}
.slider-indicators button.active {
  background-color: white; /* Cambia el color de fondo del botón activo */
  color: black; /* Cambia el color del texto del botón activo */
}

.slider-nav-next {
  right: 0;
}
</style>

</head>
<body>

    
<h1 class="display-5 fw-bolder" style="text-align: center;margin-top: 100px;text-decoration:underline;margin-bottom: 50px">Bienestar Estudiantil</h1>
    
        <!-- Carrusel de fotos -->

        <div class="swiffy-slider">
    <ul class="slider-container">
        <li><img src="img/ejemploPrimaria.jpg" style="max-width: 80%;height: auto;"></li>
        <li><img src="img/ejemploLibrary.jpg" style="max-width: 80%;height: auto;"></li>
        <li><img src="img/ejemploSecundaria.jpg" style="max-width: 80%;height: auto;"></li>
    </ul>

    <button type="button" class="slider-nav" ></button>
    <button type="button" class="slider-nav slider-nav-next"></button>

    <div class="slider-indicators">
        <button class="active"></button>
        <button></button>
        <button></button>
    </div>
</div>
        




        <h1 class="display-5 fw-bolder" style="text-align: center;margin-bottom: 50px;margin-top:25px;text-decoration:underline">El centro educativo cuenta con:</h1>
        <div class="container">
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Niveles educativos con jornada extendida</li>
                    <li class="list-group-item">Inicial </li>
                    <li class="list-group-item">Primario </li>
                    <li class="list-group-item">Secundario</li>
                    <li class="list-group-item active" aria-current="true">Idiomas</li>
                    <li class="list-group-item">Inglés </li>
                    <li class="list-group-item">Portugués </li>
                    <li class="list-group-item active" aria-current="true">Servicio de micros de traslado</li>
                    <li class="list-group-item active" aria-current="true">Laboratorios de computación,física y química</li>
                    <li class="list-group-item active" aria-current="true">Comedor</li>
                    <li class="list-group-item active" aria-current="true">Enfermería</li>
                    <li class="list-group-item active" aria-current="true">Servicios de apoyo estudiantil</li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="list-group">
                <li class="list-group-item active" aria-current="true">Instalaciones</li>
                    <li class="list-group-item">Pileta de natación</li>
                    <li class="list-group-item">Canchas de fútbol </li>
                    <li class="list-group-item">Pista de atletismo</li>
                    <li class="list-group-item">Gimnasio cubierto</li>
                    <li class="list-group-item">Comedor</li>
                    <li class="list-group-item">Deportes</li>
                    <li class="list-group-item">Atletismo</li>
                    <li class="list-group-item">Natación</li>
                    <li class="list-group-item">Fútbol</li>
                    <li class="list-group-item">Artes marciales</li>
                    <li class="list-group-item">Vóleibol</li>
                    <li class="list-group-item">Danza</li>
                    <li class="list-group-item">Básquet</li>
                    <li class="list-group-item">Ajedréz</li>


                </ul>
            </div>
            
        </div>
    </div>
    

    <img class="card-img-top mb-5 mb-md-0" src="img/fotoNivelInicial.png" alt="..." />
                <img class="card-img-top mb-5 mb-md-0" src="img/fotoNivelPrimario.png" alt="..." />
                <img class="card-img-top mb-5 mb-md-0" src="img/fotoNivelSecundaria.png" alt="..." />
                


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