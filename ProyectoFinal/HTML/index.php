    <?php include('header.php'); ?>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="../IMAGENES/INDEX/car_prin2.png" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption text-medium">
                            <h1>Nuevas equipaciones</h1>
                            <p class="sub">Equípate con las nuevas equipaciones de la temporada 2017/2018.</p>
                            <p><a class="btn btn-lg btn-primary" href="productos.php" role="button">COMPRAR</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="../IMAGENES/INDEX/rusia.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <p><a class="btn btn-lg btn-primary" href="mundial.php" role="button">COMPRAR</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="../IMAGENES/INDEX/car_4.png" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption text-medium">
                            <h1>¡Estamos de estreno!</h1>
                            <p class="sub">Envíos gratuitos con el código de descuento "inauguración".</p>
                            <p><a class="btn btn-lg btn-primary" href="nosotros.php" role="button">SABER MÁS</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <div class="container">
        <h3><span class="badge badge-danger">Lo más vendido</span></h3>
        <br>
        <div class="row">
            <?php 
                         $query = $mysqli -> query ("SELECT * FROM mas_vendidas order by precio ASC");
                        while ($valores = mysqli_fetch_array($query)) {  ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img id="primera" class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="../IMAGENES/COMPRAS/<?php echo "$valores[nombre_imagen]";?>" data-holder-rendered="true">
                    <div class="card-body">
                        <p class="card-text">
                            <?php echo  "$valores[nombre_equipo]";?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="compra.php?id=<?php echo "$valores[nombre_imagen]";?>&nombre=<?php echo "$valores[nombre_equipo]";?>&precio=<?php echo "$valores[precio]";?>" class="btn btn-outline-primary">Comprar</a>
                            </div>
                            <medium class="text-muted">
                                <?php echo  "$valores[precio]".'€';?>
                            </medium>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    <?php include('footer.php');
