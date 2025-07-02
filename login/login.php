<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" hreF="loginRegister.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
 
    <div class="wrapper">
        <form action="logeate.php" method="post">

    	<h1>Inicia Sesion</h1>
		<div class="input-box">
			<input type="text" name="user_name" placeholder="Ingresa tu Nombre de Usuario" required><i class='bx bx-user'></i>
		</div>

    	<div class="input-box">
			<input type="email" name="email" placeholder="Ingresa tu Email" required> <i class='bx bxl-gmail'></i>
		</div>
		
		<div class="input-box">
			<input type="password" name="password" placeholder="Ingrese su contraseña" required><i class='bx bxs-lock-alt'></i>
		</div>

		<!-- <div class="remember-forgot">
			<label><input type="checkbox">Remember me </label>
			<a href="#">Olvidaste la contraseña?</a>
		</div> -->

		<div class="register-link">
			<p>Tienes una cuenta?</p>
			<a href="/webcompras/login/register.php">Crea una Cuenta</a>
		</div>
    	<input class="btn" type="submit" name="register">
    </form>
</div>
</body>
</html>