<?php
include('funciones.php');
$productos = traer_productos();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
       <?php include('head.php')  ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php include('navbar.php')  ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-6 mx-auto">
                <div class="text-left">
                    <h1 class="my-0">Comprá online desde tu casa.</h1>
                    <h2 class="mt-3 mb-5">¡Nosotros te lo llevamos!</h2>
                </div>
              </div>
              <div class="col-6">
                <img src="img/hero.png"/>
              </div>

            </div>
        </header>
        <!-- Productos-->
        <section class="productos-section" id="productos">
            <div class="container">
                <div class="row mx-auto text-center">
                  <div class="col-lg-8 mx-auto">
                      <h3 class="mb-4">nuestros productos</h3>
                  </div>
                </div>
                <div class="row align-items-end">
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/papas-fritas.png" />
                      <h4 class="text-left">Papas Fritas</h4>
                      <h5 class="text-left">$100</h5>
                      <button data-percio="<?php echo $producto['nombre'];?>" data-nombre="<?php echo $producto['precio'];?>" class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/ensalada.png" />
                      <h4 class="text-left">Ensalada</h4>
                      <h5 class="text-left">$300</h5>
                      <button data-percio="<?php echo $producto['nombre'];?>" data-nombre="<?php echo $producto['precio'];?>" class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/pizza.png" />
                      <h4 class="text-left">Pizza</h4>
                      <h5 class="text-left">$500</h5>
                      <button  class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/sandwich.png" />
                      <h4 class="text-left">Sandwich</h4>
                      <h5 class="text-left">$300</h5>
                      <button class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/hamburguesa.png" />
                      <h4 class="text-left">Hamburguesa</h4>
                      <h5 class="text-left">$350</h5>
                      <button class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/galletitas.png" />
                      <h4 class="text-left">Galletitas</h4>
                      <h5 class="text-left">$200</h5>
                      <button class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/pancho.png" />
                      <h4 class="text-left">Pancho</h4>
                      <h5 class="text-left">$200</h5>
                      <button class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="img/dona.png" />
                      <h4 class="text-left">Dona</h4>
                      <h5 class="text-left">$100</h5>
                      <button class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- Contacto-->
        <?php include('contacto.php')  ?>


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
