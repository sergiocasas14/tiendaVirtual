<?php include_once 'Views/template-principal/header.php'; ?>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_01.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success">Ropa <b>deportiva</b></h1>
                                <h3 class="h2">Se ajusta perfectamente a cada cuerpo y cada deporte.</h3><br><br>
                             
                                <p>
                                Tu mejor equipación para cada movimiento y cada día. Consigue ofertas exclusivas. Movimiento sin esfuerzo y comodidad sin igual. 
                                Transforma tu entrenamiento con ella.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_02.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Accesorios <b>deportivos</b></h1>
                                <h3 class="h2">Equipamiento y complementos</h3><br><br>
                                <p>
                                Descubre todos los accesorios y equipamiento para hombre y mujer. Aprovecha las entregas y devoluciones gratuitas con tu pedido online.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./assets/img/banner_img_03.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1 text-success">Últimas tendencias</h1>
                                <h3 class="h2">Objetos más comprados</h3><br><br>
                                <p>
                                    Descubre que es lo más comprado tanto en hombre como en mujeres de todo el mundo. Encuentra tu estilo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FECHAS DEL SLIDER
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
        -->
    </div>
    <!-- End Banner Hero -->


    <!-- Start Categorias del mes -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categorias del mes</h1>
                <p>
                    Descubre los productos más destacados de la web. En el encontrarás descuentos exclusivos.
                </p>
            </div>
        </div>
        <div class="row">
            <!--Recorro el arreglo categorias y temporalmente lo guardo en una variable -->
            <?php foreach ($data['categorias'] as $categoria) { ?> 
            <div class="col-12 col-md-4 p-5 mt-3">
                
                <!-- accedo a las img de la base de datos -->
                <a href="#"><img src="<?php echo $categoria['imagen']; ?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $categoria['categoria']; ?></h5>
            </div>
            <?php } ?>
            <!--<div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Deportivas</h2>
                <p class="text-center"><a class="btn btn-success">Comprar</a></p>
            </div>
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="./assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
                <h2 class="h5 text-center mt-3 mb-3">Accesorios</h2>
                <p class="text-center"><a class="btn btn-success">Comprar</a></p>
            </div> -->
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Productos cajas -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Productos relacionados</h1>
                    <hr>
                    <p>
                        Algunos de los productos más vendidos del mes. Con envios de 48h y descuentos del 30%.
                    </p>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data['nuevosProductos'] as $producto) {  ?>

                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>">
                            <img src="<?php echo $producto['imagen']; ?>" class="card-img-top" alt="<?php echo $producto['nombre']; ?>">
                        </a>
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-warning fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                    <i class="text-muted fa fa-star"></i>
                                </li>
                                <li class="text-muted text-right"><?php echo MONEDA . ' ' . $producto['precio']; ?></li>
                            </ul>
                            <a href="<?php echo BASE_URL . 'principal/detail/' . $producto['id']; ?>" class="h2 text-decoration-none text-dark"><?php echo $producto['nombre']; ?></a>
                            <p class="card-text">
                                <?php echo $producto['descripcion']; ?>
                            </p>
                            <p class="text-muted">Reseñas (24)</p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Featured Product -->

    <?php include_once 'Views/template-principal/footer.php'; ?>
  
</body>

</html>