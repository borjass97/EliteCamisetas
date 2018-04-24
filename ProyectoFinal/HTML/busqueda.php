        <?php include('header.php');?>
        <?php  $busca = $_GET['buscar'];
        $query = $mysqli -> query (" SELECT * FROM camisetas where nombre_equipo like '%$busca%'");
        $num_resul = mysqli_num_rows($query);
        $random = $mysqli -> query (" SELECT * FROM camisetas ORDER BY RAND() LIMIT 6");
        ?>

        <div class="container">
            <br>
            <?php if ($num_resul < 1) {?>
            <div class="alert alert-danger" role="alert">
          No hay resultados que coincidan con <strong><?php echo "\"".$busca."\"" ; ?></strong> pero quizás esto podría interesarte:
        </div>
            <br>
                <div class="row">
                
                <?php 
                            while ($valores = mysqli_fetch_array($random)) { 
                ?>
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
               
            <?php
        } else if($num_resul == 1){?>
             <div class="alert alert-info" role="alert">
          Hemos encontrado 1 resultado con <strong><?php echo "\"".$busca."\""; ?></strong>:
        </div>
            
        <?php
        }else { ?>
             <div class="alert alert-info" role="alert">
        Se han encontrado <?php echo $num_resul; ?> resultados que coinciden con <strong><?php echo "\"".$busca."\""; ?></strong>:
        </div>  
        <?php } ?>
            <br>
            <div class="row">

                <?php 
                            while ($valores = mysqli_fetch_array($query)) { 
                ?>
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
        <?php include('footer.php');?>
