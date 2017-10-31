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
<!--<link rel ="stylesheet" href="estilos.css"/>-->
<link rel="stylesheet" href="estilos2.css"/>
<!--aqui hay dos hojas, una para las pruebas y otra que se puede usar-->



</head>

<body>

<h1>Ejemplo de inicio</h1> <!--titulo-->

<h2>Inicia sesi&oacuten</h2>

<!---inicia el formulario------------------------------->
<form method="post" name="datos_usuario" id="datos_usuario" autocomplete="off">

  <table align = "center">
    <tr>
      <td id ="identificadorentrada">Nombre de usuario</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Elija nombre de usuario"></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Contraseña</td>
      <td><label for="contrasena_usuario"></label>
      <input type="password" name="contrasena_usuario" id="constrasena_usuario" placeholder="Elija constraseña"></td>
    </tr>

    <tr>
			<td>&nbsp;</td> <!--&nbsp crea un espacio horizontal-->
      <td>&nbsp;</td> <!--&nbsp crea un espacio horizontal-->
    </tr>

    <tr>
      <td colspan="2" align="center"><input type="submit"  name="enviando" id="enviando" value="Entrar"></td>
    </tr>

  </table>

</form>
<!---termina el formulario de inicio-->

<h3>Done</h3>

<?php

 include ("Usuario.php");
 include ("Validador.php");


 $validador = new Validador("usuarios.json");

 if (isset($_POST["enviando"])) {$nombre=$_POST["nombre_usuario"];


 if ($validador->validarinicio($nombre)){
   echo "<p class='validado'> Puedes entrar </p>";
 }
 else echo "<p class='no_validado'> No puedes entrar </p>";

}
?>

</body>

</html>
