<?php require 'config/config.php';?>
<?php
$productos=$conexion->query('SELECT*FROM productos');
$productos->execute();
$listaProductos=$productos->fetchAll(PDO::FETCH_OBJ);
?>


<!doctype html>
<html lang="es">
  <head>
    <!-- metadata -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5c5946fe44.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Tienda de Disfraces</title>
  </head>
  <body>
    <!-- Barra de navegacion -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse flex-row-reverse" id="navbar">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link active" href="#contacto">Contacto</a>
      </div>
    </div>
  </div>
</nav>

    <!-- cards de productos -->
    <div class="container">    
        <div class="row mt-5">
            <?php foreach($listaProductos as $producto):?>
            <div class="col-lg-3 col-md-6 col-sm-10 offset-md-0 offset-sm-1">
                <div class="card tarjeta" >
                    <img  class="card-img-top" src="images/<?php echo $producto->imagen;?>">
                    <div class="card-body" >
                        <h5 class="d-inline"><b><?php echo $producto->nombre;?></b> </h5>
                        <h5 class="d-inline"><div class="text-muted d-inline"><?php echo $producto->precio;?> €</div></h5>
                        <p><?php echo $producto->descripcion;?> </p>
                         <a href="#"  class="btn btn-outline-primary w-100 rounded my-2"> Comprar <i class="fas fa-arrow-right"></i> </a>      
     
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <br>
         </div>
         </div>

        <footer class="bg-dark text-white text-center text-lg-start" style="margin-top: 40px">
        <!-- Footer -->
        <div class="container p-4">
            
            <div class="row">
            
            <div class="col-lg-5 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase">Envios</h5>

                <p>
                Los pedidos se procesan y envian en un maximo de 24h en horario comercial.
                Los envios se realizan mediante empresas de paqueteria privada en un plazo de 48h.
                </p>
            </div>

            <div class="col-lg-1 col-md-0 mb-0 mb-md-0">
            </div>  
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">Siguenos en redes </h5>
                <ul class="list-unstyled mb-0">
                <li>
                    <a href="https://www.instagram.com/" class="text-white"><i class="bi bi-instagram"></i> Instagram </a>
                </li>
                <li>
                    <a href="https://www.tiktok.com/es/" class="text-white"><i class="bi bi-tiktok"></i>  TikTok</a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" class="text-white"><i class="bi bi-facebook"></i> Facebook </a>
                </li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-0" id="contacto">Contacto</h5>

                <ul class="list-unstyled">
                <li>
                    C/Falsa 34, Madrid, España                    
                </li>
                <li>
                <a href="https://goo.gl/maps/1DJHZNjceF5fKChk9" class="text-white"><i class="bi bi-geo-alt"></i> Ver ubicacion </a>
                </li>
                <li>
                <i class="bi bi-telephone-outbound-fill"></i> 987 65 43 21
                </li>
                <li>
                <i class="bi bi-whatsapp"></i> 687 95 43 21
                </li>
                </ul>
            </div>

            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright
            
        </div>
        </footer>
        <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="" crossorigin="anonymous"></script> -->
        <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="" crossorigin="anonymous"></script>
  </body>
 
</html>