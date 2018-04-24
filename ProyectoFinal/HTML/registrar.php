	<?php include('header.php'); ?>
	<?php 
	$nombre = $_POST['nombre'];
	$reg_correo = $_POST['reg_correo'];
	$reg_contra = $_POST['reg_pass'];
	$reg_contra2 = $_POST['reg_pass2'];
	$consulta_registro = $mysqli -> query (" SELECT * FROM usuarios where correo like '$reg_correo'");
	$registrar = mysqli_num_rows($consulta_registro);

	    if($registrar === 1) { ?>
	<div class="alert alert-danger" role="alert">
	    Esa dirección de correo ya está en uso.
	</div>
	<?php } else if($registrar===0) {
	        if($reg_contra === $reg_contra2) { ?>
	<div class="alert alert-info" role="alert">
	    Usuario creado correctamente.
	</div>
	<?php $registrar_usuario = $mysqli -> query (" INSERT INTO usuarios values('$nombre', '$reg_correo', '$reg_contra')");
	        } else { ?> 
	<div class="alert alert-danger" role="alert">
	    Las contraseñas no coinciden.
	</div>
	<?php }
	    }

	?>
