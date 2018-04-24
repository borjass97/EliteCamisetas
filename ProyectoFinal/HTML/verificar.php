	<?php include('header.php'); ?>

	<?php $sesion = $_POST['correo']; 
	$pass = $_POST['pass'];
	$consulta_inicio = $mysqli -> query (" SELECT * FROM usuarios where correo like '$sesion' and password like '$pass'");
	$iniciar_sesion = mysqli_num_rows($consulta_inicio);

	    if($iniciar_sesion === 1){ ?>
	<div class="alert alert-info" role="alert">
	    Sesión iniciada correctamente.
	</div>
	<?php } else { ?>
	<div class="alert alert-danger" role="alert">
	    El nombre de usuario o contraseña son incorrectos.
	</div>
	<?php } 
	 include('footer.php'); ?>
