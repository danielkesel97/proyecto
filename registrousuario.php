<?php 

$conexion = mysqli_connect("localhost","root","","gestion") or die("Problemas al conectar a la base de datos");


if(isset($_POST['usuario']) && isset( $_POST['password']) && isset( $_POST['correo'])) {
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];

	$datosUsuario = mysqli_query($conexion,"SELECT * from usuario where usuario='$usuario'") or die(mysqli_error($conexion));

	$cantidadUsuarios = mysqli_num_rows($datosUsuario);
	if($cantidadUsuarios == 0) {
		$registro = mysqli_query($conexion,"INSERT into usuario (usuario,password,mail) values ('$usuario','$password','$correo') ") or die (mysqli_error($conexion));
		if($registro) {
			echo "El usuario ".$usuario. " se ha registrado correctamente. ";

			} else {
				header("location:CreateUser.php?usuarioNoLogeado=no");
			}
	} else {
		header("Location:CreateUser.php?usuarioYaRegistrado=si");
       
	 

    }



    }   else {
	echo "debes completar todos los inputs para seguir";
    }

?>