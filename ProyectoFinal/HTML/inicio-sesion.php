    <?php include('header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="post" class="principal" action="verificar.php">
                    <img id="logo" class="mx-auto d-block" src="../IMAGENES/logo.png"><br>

                    <i class="far fa-user fa-lg iconos"></i><input type="text" class="entrada" placeholder="Correo" name="correo" required>

                    <i class="fas fa-lock fa-lg iconos"></i><input type="password" class="entrada" placeholder="Contraseña" name="pass" required>

                    <input type="submit" class="btn btn-outline-primary mx-auto d-block" value="INICIAR">
                    <br>
                    <div class="text-center">
                    <a href="contacto.php" class="">¿No tienes cuenta? Regístrate</a>
                    </div>
                    <br>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <br>
    <?php include('footer.php'); ?>
