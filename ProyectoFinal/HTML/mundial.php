    <?php include('header.php'); ?>

                <div class="container">

                    <br>

                    <!--copy begin here:-->
                    <div id="product" class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <!--copy begin here:-->

                         <div data-type="countdown" data-id="558883" class="tickcounter" style="width: 100%; position: relative; padding-bottom: 25%"><a href="//www.tickcounter.com/countdown/558883/mundial-2018" title="Mundial 2018">Mundial 2018</a><a href="//www.tickcounter.com/" title="Countdown">Countdown</a></div><script>(function(d, s, id) { var js, pjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//www.tickcounter.com/static/js/loader.js"; pjs.parentNode.insertBefore(js, pjs); }(document, "script", "tickcounter-sdk"));</script>
                            <!--copy end here:-->

                        </div>
                        <div class="col-md-4"></div>
                    </div>
                    <!--copy end here:-->

                    <h3><span class="badge badge-dark">Mundial 2018</span></h3>

                    <br>
                    <div class="row">

                        <?php 
                         $query = $mysqli -> query (" SELECT * FROM camisetas where liga like 'mundial'");
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
