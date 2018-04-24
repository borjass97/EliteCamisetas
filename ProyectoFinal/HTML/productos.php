    <?php include('header.php'); ?>
    <div id="product" class="container marketing">
        <div class="row">

            <?php 
                         $query = $mysqli -> query (" SELECT * FROM productos order by categoria");
                        while ($valores = mysqli_fetch_array($query)) {  ?>
            <div class="col-md-4">
                <div class="text-center">
                    <img class="rounded-circle" src="../IMAGENES/PRODUCTOS/<?php echo "$valores[nombre_imagen]";?>">
                    <h2><?php echo "$valores[nombre_liga]";?></h2>
                    <p><?php echo "$valores[descripcion_liga]";?></p>
                    <p><a class="btn btn-secondary" href="<?php echo "$valores[url]";?>" role="button">Ver colección »</a></p>
                </div>
            </div>      

            <?php } ?>

        </div>
    </div>

    <br><br><br>

    <?php include('footer.php'); ?>
