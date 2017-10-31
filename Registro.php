<!--Formulario de prueba-->
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Done!</title>

<!--fuentes de google-->
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"/> <!--font-family: 'Quicksand', sans-serif;-->
<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"/> <!--font-family: 'Space Mono', monospace;-->
<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet"/> <!--font-family: 'Megrim', cursive;-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/> <!--font-family: 'Roboto', sans-serif;-->
<!--<link rel="stylesheet" href="estilos.css"/>-->
<link rel ="Stylesheet" href="estilos.css"/>
<!--aqui hay dos hojas, una para las pruebas y otra que se puede usar-->

<style type="text/css">
	.error{
		color: red;
	}
</style>

</head>

<body>

<h1>Ejemplo de registro</h1> <!--titulo-->

<h2>Reg&iacutestrate en Done!</h2>

<!-- -inicia el formulario----------------------------- -->
<?php
	$nameErr = $passwordErr = $password2Err ="";
	$nombrep = $apellido =$nombre = $email = $pass = $pass2 = $genero = "";
	$edad = 0;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$edad = (int) $_POST["edad_usuario"];
		$email = $_POST["email_usuario"];
		$genero = $_POST["genero_usuario"];
		$nombrep = $_POST["nombre_persona"];
		$apellido = $_POST["apellido_persona"];

		if(empty($_POST["nombre_usuario"])){
			$nameErr = "Se requiere un nombre de usuario";
		} else{
			$nombre = comprobar($_POST["nombre_usuario"]);
		}

		if (empty($_POST["contrasena_usuario"])){
			$passwordErr = "Se requiere una contraseña";
		} else{
			$pass = comprobar($_POST["contrasena_usuario"]);
		}

		if(empty($_POST["contrasena_usuario_repetir"])){
			$password2Err = "Se requiere que repita la contraseña";
		} else{
			$pass2 = comprobar($_POST["contrasena_usuario_repetir"]);
		}

	}

	function comprobar($dato){
		if(strlen($dato) <= 50){
			return $dato;
		}
		return "";
	}
?>

<form method="post" name="datos_usuario" id="datos_usuario" autocomplete="off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

  <table align = "center">
  	<tr>
  		<td id="identificadorentrada">Nombre</td>
  		<td>
  			<label for="nombre_persona"></label>
  			<input type="text" name="nombre_persona" id="nombre_persona" placeholder="Introduzca su nombre">
  		</td>	
  	</tr>

  	<tr>
  		<td id="identificadorentrada">Apellido</td>
  		<td>
  			<label for="apellido_persona"></label>
  			<input type="text" name="apellido_persona" id="apellido_persona" placeholder="Introduzca su apelldo">
  		</td>
  	</tr>

    <tr>
      <td id ="identificadorentrada">E-mail</td>
      <td><label for="email_usuario"></label>
      <input type="email" name="email_usuario" id="email_usuario" placeholder="Introduzca un email válido"></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Nombre de usuario</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Elija nombre de usuario"><span class="error">* <?php echo $nameErr; ?></span></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Contraseña</td>
      <td><label for="contrasena_usuario"></label>
      <input type="password" name="contrasena_usuario" id="contrasena_usuario" placeholder="Elija constraseña"><span class="error">* <?php echo $passwordErr ?></span></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Repetir contraseña</td>
      <td><label for="contrasena_usuario_repetir"></label>
      <input type="password" name="contrasena_usuario_repetir" id="constrasena_usuario_repetir" placeholder="Verificar contraseña"><span class="error">* <?php echo $password2Err ?></span></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Edad</td>
      <td><label for="edad_usuario"></label>
      <input type="number" max="100" min="18" name="edad_usuario" id="edad_usuario" placeholder="Edad"></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Fecha de nacimiento</td>
      <td><label for="fecha_nacimiento"></label>
      <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"></td>
    </tr>


    <tr>
		<datalist id ="generos">
		  <option value="Mujer"/>
		  <option value="Hombre"/>
		</datalist>
      <td id ="identificadorentrada">G&eacutenero</td>
    <td><label for="genero_usuario"></label>
      <input type="text" name="genero_usuario" id="genero_usuario" list="generos"></td>
    </tr>


    <tr>
			<td>&nbsp;</td> <!-- &nbsp crea un espacio horizontal -->
      <td>&nbsp;</td> <!--&nbsp crea un espacio horizontal-->
    </tr>

    <tr>
      <td colspan="2" align="center"><input type="submit"  name="enviando" id="enviando" value="Registrarse"></td>
    </tr>

  </table>

</form>
<!-- -termina el formulario----------------------------- -->

<h3>Done</h3>

<?php

  include("Usuario.php");
  include("Validador.php");



  $usuario1 = new Usuario($nombre,$edad,$pass,$pass2,$email,0,$genero);

	if (isset($_POST["enviando"])){
  $usuario1->transformToJson();}



?>

</body>

</html>
