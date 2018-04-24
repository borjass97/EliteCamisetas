    <?php include('header.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="card text-center">
                    <div class="card-header">
                        Factura digital
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php 
                 $nombre = $_POST['nombre_completo']; echo '<strong>' .$nombre .'</strong>:'?></h5>
                        <p class="card-text">
                            <?php 
                 $nombre_jug = $_POST['nombre']; 
                 $dorsal = $_POST['numero']; 
                 $talla = $_POST['talla'];                          
                 $correo = $_POST['email'];  
                 $direccion = $_POST['direccion']; 
                 echo 'Tu pedido de la camiseta <strong>' .$nombre_jug .'</strong>, dorsal <strong>' .$dorsal .'</strong> y talla <strong>' .$talla .' </strong> se ha realizado con exito. En breve la recibirás en: <strong>' .$direccion .'</strong>.<br>¡Muchas gracias por la confianza!';     
                 ?></p>
                        <a href="index.php" class="btn btn-dark">IR AL HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <?php include('footer.php'); ?>
