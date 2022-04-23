<?php

session_start();

if (isset($_SESSION['usuario'])) {
	header("location: php/dashboard.php");
}


?>




<!DOCTYPE html>
<html>

<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" href="Loginform/css/style.css" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<img class="wave" src="Loginform/img/wave.png" alt="">

	<div class="container">

		<div class="img">
			<img src="Loginform/img/bg.svg" alt="">
		</div>

		<div class="login-content">
			<!--Login-->
			<form action="php/login_usuario_be.php" method="POST">
				<img src="Loginform/img/avatar.svg" alt="">
				<h2 class="title">Bienvenido</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Usuario</h5>
						<input type="text" class="input" name="usuario">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Contrasena</h5>
						<input type="password" class="input" name="contrasena">
					</div>
				</div>
				<button class="btn">Login</button>
			</form>

			<!--Registro-->
			<!--
		<form action="php/registro_usuario.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Usuario" name="usuario" id="">
                    <input type="password" placeholder="Contraseña" name="contrasena" id="">
                    <button>Registrarse</button>
                </form>
			-->

		</div>
	</div>

	<script src="Loginform/js/login.js"></script>

</body>

</html>