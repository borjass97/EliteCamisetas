    <?php include('header.php'); ?>

    <div class="container">
        <br>
        <h3><span class="badge badge-dark">Premier League 2017/2018</span></h3>
        <br>
        <div class="row">

            <?php 
                         $query = $mysqli -> query ("SELECT * FROM camisetas where liga like 'premier'");
                        while ($valores = mysqli_fetch_array($query)) {  ?>
            <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Imagen del <?php echo "$valores[nombre_equipo]";?>" src="../IMAGENES/COMPRAS/<?php echo "$valores[nombre_imagen]";?>">
                    <div class="card-body">
                        <p class="card-text">
                            <?php echo  "$valores[nombre_equipo]";?>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="compra.php?id=<?php echo "$valores[nombre_imagen]";?>&nombre=<?php echo "$valores[nombre_equipo]";?>&precio=<?php echo "$valores[precio]";?>" class="btn btn-outline-primary">Comprar</a>
                            </div>
                            <medium class="text-muted">
                                <?php  echo  "$valores[precio]".'€';
                       
                    ?>
                            </medium>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>

    <?php include('footer.php'); ?>
