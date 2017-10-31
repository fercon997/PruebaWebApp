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
  <form  action="index.php" method="POST">
   <input name="Registro" type="submit" class="boton" value="Registrar Usuario"/> <br>
    <input name="Inicio" type="submit" class="boton" value="Iniciar Sesion"/> <br>
 </form>
 <?php
   $url = '';
   if ( isset($_POST['Registro']) )
    $url = 'Registro.php';
   if ( isset($_POST['Inicio']) )
    $url = 'Inicio.php';
   header("Location: $url");
 ?>
</body>
</html>
