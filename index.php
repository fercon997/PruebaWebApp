<!DOCTYPE html>
<html lang="es-VE">
<html>
<head>
	<title>Done!</title>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"/> <!--font-family: 'Quicksand', sans-serif;-->
<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"/> <!--font-family: 'Space Mono', monospace;-->
<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet"/> <!--font-family: 'Megrim', cursive;-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/> <!--font-family: 'Roboto', sans-serif;-->
<link rel="stylesheet" href="estilos2.css"/>
<link rel="stylesheet" href="estilos3.css"/>
</head>
<body>
  <!--<div id="logo">-->
    <img class="logo" src="Logo.jpg">
  <!--</div>-->

	<?php
    $url = '';
    if ( isset($_POST['registrar']) )
     $url = '/registrar_usuario';
    if ( isset($_POST['Inicio']) )
     $url = '/login';
    //header("Location: $url");
  ?>

  <form method="GET">
		<button formaction="/registrar" name="submit" class="boton" value="registrar">Registrar Usuario</button>
    <br>
    <input formaction="/login" name="sumbit" type="submit" class="boton" value="Iniciar Sesion"/> <br>
 </form>
</body>
</html>
