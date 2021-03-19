<!-- =========== TOP ========== -->
<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!-- SOCIAL -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-12 social barraSuperior">
                <ul>
                    <?php
                        $social = ControladorPlantilla::ctrEstiloPlantilla();
                        
                        $jsonRedesSociales = json_decode($social["redesSociales"],true);

                        foreach ($jsonRedesSociales as $key => $value) {
                            echo '<li>
                                    <a href="'.$value["url"].'" target="_blank">
                                        <i class="'.$value["red"].' redSocial '.$value["estilo"].'"></i>
                                    </a>
                                </li>';
                        }
                        
                    
                    ?>
                </ul>
            </div>
            <!-- INICIO-SESION/REGISTRO -->
            <div class="col-lg-3 col-md-3 col-sm-4 col-12 registro">
                <ul>
                    <li><a href="#modalIngreso" data-toggle="modal">Ingresar</a></li>
                    <li>|</li>
                    <li><a href="#modalRgistro" data-toggle="modal">Crear una cuenta</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- =========== HEADER ========== -->
<header class="container-fluid"> 
    <div class="container">
        <div class="row" id="cabezote">
            <!-- LOGOTIPO -->
            <div class="col-lg-3 col-md-3 col-sm-2 col-12" id="logotipo">
                <a href="#">
                    <img src="http://localhost/cursophp/backend/<?php echo $social["logo"]?>" class="img-fluid" alt="">
                </a>
            </div>
            <!-- BLOQUE DE CATEGORÍAS Y BUSCADOR -->
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <!-- PRUEBA BOTON CATEGORIAS Y BUSCADOR JUNTOS -->
                <div class="input-group mb-3 menuBuscador " id="menuBuscador">
                    <span class="input-group-text backColor" id="btnCategorias">Menu
                        <span class="float-end">
                            <i class="bi bi-three-dots-vertical backColor"></i>
                        </span>
                    </span>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar...">
                    <button class="btn  backColor" id="buscador" type="button" id="button-addon2"><i class="bi bi-search backColor"></i></button>
                </div>
            </div>
            <!-- CARRITO DE COMPRAS -->
            <div class="col-lg-3 col-md-3 col-sm-2 col-12" id="carrito">
                <a href="#">
                    <button class="btn float-start backColor">
                        <i class="bi bi-cart4 backColor"></i>
                    </button>
                </a>
                <p>TU CARRITO <span class="cantidadCesta">3</span> <br> USD $ <span class="sumaCesta">20</span></p>
            </div> 
        </div>
        <!-- CATEGORIAS -->
        <div class="container backColor" id="categorias">
            <div class="row">
                <?php
                    $categorias = ControladorProductos::ctrMostrarCategorias();

                    foreach ($categorias as $key => $value) {
                        echo '<div class="col-12 col-sm-3 col-md-2">
                                <h4>
                                    <a href="#" class="pixelCategorias">'.$value["categoria"].'</a>
                                </h4>
                                <hr>
                                <ul>';
                                $subcategorias = ControladorProductos::ctrMostrarSubCategorias($value["id"]);
                                    foreach ($subcategorias as $key => $value) {
                                        echo '<li><a href="#" class="pixelSubCategoria">'.$value["subcategoria"].'</a></li>';
                                    }
                                    echo '
                                </ul>
                            </div>';
                    }
                ?>
            </div>
        </div>
    </div>
</header>