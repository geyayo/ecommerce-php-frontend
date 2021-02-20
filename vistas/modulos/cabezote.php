<!-- =========== TOP ========== -->
<div class="container-fluid barraSuperior" id="top">
    <div class="container">
        <div class="row">
            <!-- SOCIAL -->
            <div class="col-lg-9 col-md-9 col-sm-8 col-12 social">
                <ul>
                    <li>
                        <a href="http://facebook.com/" target="_blank">
                            <i class="bi bi-facebook redSocial facebookBlanco"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/" target="_blank">
                            <i class="bi bi-instagram redSocial instagramBlanco"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/" target="_blank">
                            <i class="bi bi-twitter redSocial twitterBlanco"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://youtube.com/" target="_blank">
                            <i class="bi bi-youtube redSocial youtubeBlanco"></i>
                        </a>
                    </li>
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
                    <img src="http://localhost/cursophp/backend/vistas/img/plantilla/logo.png" class="img-fluid" alt="">
                </a>
            </div>
            <!-- BLOQUE DE CATEGORÍAS Y BUSCADOR -->
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                <!-- PRUEBA BOTON CATEGORIAS Y BUSCADOR JUNTOS -->
                <div class="input-group mb-3" id="menuBuscador">
                    <span class="input-group-text backColor" id="buscador">Menu
                        <span class="float-end">
                            <i class="bi bi-three-dots-vertical"></i>
                        </span>
                    </span>
                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" id="btnCategorias" type="button" data-bs-toggle="dropdown" aria-expanded="false">Menu</button> -->
                    <input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Buscar...">
                    <button class="btn  backColor" id="buscador" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                </div>
                <!-- BOTON DE CATEGORIAS -->
                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-12 backColor" id="btnCategorias">
                    <p>CATEGORÍAS
                        <span class="float-end">
                            <i class="bi bi-three-dots-vertical"></i>
                        </span>
                    </p>
                </div> -->
                <!-- BUSCADOR -->
                <!-- <div class="input-group col-lg-8 col-md-8 col-sm-8 col-12" id="buscador">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar..." aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="bi bi-search"></i>
                    </button>
                </div>  -->

                <!-- <div class="input-group col-lg-8 col-md-8 col-sm-8 col-12" id="buscador">
                    <input type="search" name="buscar" class="form-control" placeholder="Buscar...">
                    <span class="input-group-btn">
                        <i class="bi bi-search"></i>
                    </span>
                </div> -->
            </div>
            <!-- CARRITO DE COMPRAS -->
            <div class="col-lg-3 col-md-3 col-sm-2 col-12" id="carrito">
                <a href="#">
                    <button class="btn float-start backColor">
                        <i class="bi bi-cart4"></i>
                    </button>
                </a>
                <p>TU CARRITO <span class="cantidadCesta"></span> <br> USD $ <span class="sumaCesta"></span></p>
            </div> 
        </div>
        <!-- CATEGORIAS -->
        <div class="row row-cols-auto backColor" id="categorias">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-12">
                <h4>
                    <a href="#" class="pixelCategorias">Lorem Ipsum</a>
                </h4>
                <hr>
                <ul>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                    <li><a href="#" class="pixelSubCategoria">Lorem Ipsum</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>