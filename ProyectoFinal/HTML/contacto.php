    <?php include('header.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form method="POST" action="registrar.php" class="principal">
                    <!--     Se añade la imagen-->
                    <img id="logo" class="mx-auto d-block" src="../IMAGENES/REGISTRO/login.png">
                    
                    <i class="far fa-user fa-lg iconos"></i><input name="nombre" type="text" class="entrada" placeholder="Nombre" required>
                    <i class="far fa-envelope fa-lg iconos"></i><input name="reg_correo" type="email" class="entrada" placeholder="Correo" required>
                    <i class="fas fa-lock fa-lg iconos"></i><input name="reg_pass" type="password" class="entrada" placeholder="Contraseña" required>
                    <i class="fas fa-lock fa-lg iconos"></i><input type="password" name="reg_pass2" class="entrada" placeholder="Repetir contraseña" required>
                    <!--        Botón que permite el envio de información-->
                    <input type="submit" class="btn btn-outline-primary mx-auto d-block" value="REGISTRARSE">
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <br><br>

    <?php include('footer.php'); ?>
