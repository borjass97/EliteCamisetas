    <?php include('header.php'); ?>
    <?php
    $id = $_GET['id'];
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    ?>

        <div class="cont">
            <div class="container">
                <div class="row">
                    <div id="resumen-compra" class="col-md-4 order-md-2 mb-4">
                        <img class="mx-auto d-block" src="../IMAGENES/COMPRAS/<?php echo "$id";?>" alt="<?php echo "$nombre"; ?>" width="300" height="300">
                        <h2 class="text-center">
                            <?php echo "$nombre";?>
                        </h2>
                        <br>
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Carrito de compra</span>
                            <span class="badge badge-secondary badge-pill">1</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">
                                        <?php echo "$nombre";?>
                                    </h6>
                                </div>
                                <div>
                                    <h6 class="my-0">
                                        <?php echo "$precio" ."€";?>
                                    </h6>
                                </div>

                            </li>
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h6 class="my-0">Gastos de envíos</h6>
                                </div>
                                <span id="gasto_envios" class="text-muted">5.95€</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Código de descuento</h6>
                                    <small>Inauguración</small>
                                </div>
                                <span id="descuento_envios" class="text-success">-5.95€</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total</span>
                                <strong>  <?php echo "$precio" ."€";?> </strong>
                            </li>
                        </ul>

                    </div>
                    <div class="col-md-8 order-md-1">
                        <h4 class="mb-3">Detalles</h4>
                        <form id="product" class="needs-validation" method="post" action="resumen-compra.php">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="country">Talla</label>
                                    <select class="custom-select d-block w-100" name="talla" required>
                                        <option>XS</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="numero">Dorsal</label>
                                    <input type="number" name="numero" class="form-control" id="numero" placeholder="Ej: 10" min="1" max="99" maxlength="2">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="lastName">Nombre</label>
                                <input type="text" name="nombre" class="form-control" id="lastName" placeholder="Nombre de la camiseta" maxlength="14">
                            </div>

                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="correo@ejemplo.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="address">Dirección</label>
                                <input type="text" name="direccion" class="form-control" id="address" placeholder="Calle Ejemplo 1234" required>
                            </div>

                            <div class="mb-3">
                                <label for="address2">Dirección 2 <span class="text-muted">(Opcional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Calle Ejemplo 5678">
                            </div>

                            <div class="row">
                                <div class="col-md-5 mb-3">
                                    <label for="country">País</label>
                                    <select class="custom-select d-block w-100" id="country" disabled>
                      <option>España</option>
                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="state">Provincia</label>
                                    <select class="custom-select d-block w-100" id="provincia" onchange="envios()" id="state" required>
                                         <option value='alava'>Álava</option>
                                         <option value='albacete'>Albacete</option>
                                         <option value='alicante'>Alicante/Alacant</option>
                                         <option value='almeria'>Almería</option>
                                         <option value='asturias'>Asturias</option>
                                         <option value='avila'>Ávila</option>
                                         <option value='badajoz'>Badajoz</option>
                                         <option value='barcelona'>Barcelona</option>
                                         <option value='burgos'>Burgos</option>
                                         <option value='caceres'>Cáceres</option>
                                         <option value='cadiz'>Cádiz</option>
                                         <option value='cantabria'>Cantabria</option>
                                         <option value='castellon'>Castellón</option>
                                         <option value='ceuta'>Ceuta</option>
                                         <option value='ciudadreal'>Ciudad Real</option>
                                         <option value='cordoba'>Córdoba</option>
                                         <option value='cuenca'>Cuenca</option>
                                         <option value='girona'>Girona</option>
                                         <option value='granada'>Granada</option>
                                         <option value='guadalajara'>Guadalajara</option>
                                         <option value='guipuzcoa'>Guipúzcoa</option>
                                         <option value='huelva'>Huelva</option>
                                         <option value='huesca'>Huesca</option>
                                         <option value='illesbalears'>Illes Balears</option>
                                         <option value='jaen'>Jaén</option>
                                         <option value='acoruña'>A Coruña</option>
                                         <option value='larioja'>La Rioja</option>
                                         <option value='laspalmas'>Las Palmas</option>
                                         <option value='leon'>León</option>
                                         <option value='lleida'>Lleida</option>
                                         <option value='lugo'>Lugo</option>
                                         <option value='madrid'>Madrid</option>
                                         <option value='malaga'>Málaga</option>
                                         <option value='melilla'>Melilla</option>
                                         <option value='murcia'>Murcia</option>
                                         <option value='navarra'>Navarra</option>
                                         <option value='ourense'>Ourense</option>
                                         <option value='palencia'>Palencia</option>
                                         <option value='pontevedra'>Pontevedra</option>
                                         <option value='salamanca'>Salamanca</option>
                                         <option value='segovia'>Segovia</option>
                                         <option value='sevilla'>Sevilla</option>
                                         <option value='soria'>Soria</option>
                                         <option value='tarragona'>Tarragona</option>
                                         <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
                                         <option value='teruel'>Teruel</option>
                                         <option value='toledo'>Toledo</option>
                                         <option value='valencia'>Valencia/Valéncia</option>
                                         <option value='valladolid'>Valladolid</option>
                                         <option value='vizcaya'>Vizcaya</option>
                                         <option value='zamora'>Zamora</option>
                                         <option value='zaragoza'>Zaragoza</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="zip">Codigo Postal</label>
                                    <input type="number" class="form-control" id="zip" placeholder="" required min="0" max="999999" maxlength="5">
                                </div>
                            </div>

                            <h4 class="mb-3">Método de pago</h4>

                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required>
                                    <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="debit">Tarjeta de débito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                    <label class="custom-control-label" for="paypal">PayPal</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Nombre</label>
                                    <input type="text" name="nombre_completo" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Nombre tal y como aparece en la tarjeta.</small>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Número de la tarjeta</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-expiration">Fecha de expiración</label>
                                    <input type="month" class="form-control" id="cc-expiration" placeholder="" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-expiration">Código de seguridad</label>
                                    <input type="number" class="form-control" id="cc-cvv" placeholder="" min="100" max="999" length="3" required>
                                </div>
                            </div>
                            <hr class="mb-4">
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Finalizar pago">
                        </form>
                    </div>
                </div>

            </div>
            <br><br>
        </div>

        <?php include('footer.php'); ?>
