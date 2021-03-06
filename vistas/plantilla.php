<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Tienda Virtual">
    <meta name="description" content="Una descripción del sitio">
    <meta name="keyword" content="palabras, claves, del, sitio">  
    
    <title>Ecommerce-Curso</title>

    <?php
      $icono = ControladorPlantilla::ctrEstiloPlantilla();

      echo '<link rel="icon" href="http://localhost/cursophp/backend/'.$icono["icono"].'">';

      /* ========== MANTENER LA RUTA FIJA DEL PROYECTO ========= */
      $url = Ruta::ctrRuta();

    ?>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/plantilla.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/cabezote.css">
    <link rel="stylesheet" href="<?php echo $url;?>vistas/css/slide.css">

    
  </head>
  <body>

    <?php
      /*========== CABEZOTE ==========*/
      include "modulos/cabezote.php";

      /*========== CONTENIDO DINAMICO ==========*/
      $rutas = array();
      $ruta = null;

      if(isset($_GET["ruta"])){

        $rutas = explode("/", $_GET["ruta"]);

        $item = "ruta";
        $valor = $rutas[0];


        /*========== URL's AMIGABLES DE CATEGORIAS ==========*/
        $rutaCategorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
        if(is_array($rutaCategorias)){
          if($valor == $rutaCategorias["ruta"]){
            $ruta = $valor;
          }
        }

        /*========== URL'S AMIGABLES DE SUB-CATEGORIAS ==========*/
        $rutaSubCategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
        if(is_array($rutaSubCategorias)){
          foreach ($rutaSubCategorias as $key => $value) {
            if ($rutas[0] == $value["ruta"]) {
              $ruta = $rutas[0];
            }
          }
        }
        
        /*========== LISTA BLANCA DE URL's AMIGABLES ==========*/
        if($ruta != null){
          include "modulos/productos.php";
        } else {
          include "modulos/error404.php";
        }
      } else {
        include "modulos/slide.php";
      }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?php echo $url;?>vistas/js/cabezote.js"></script>
    <script src="<?php echo $url;?>vistas/js/plantilla.js"></script>
    <script src="<?php echo $url;?>vistas/js/slide.js"></script>



    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>