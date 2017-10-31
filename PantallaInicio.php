<!DOCTYPE html>
<html lang="es-VE">
<html>
<head>
	<title>Done!</title>
<style>
.boton{
  -webkit-border-radius: 13;
  -moz-border-radius: 13;
  border-radius: 13px;
  font-family: Arial;
  color: ##234861;
  font-size: 41px;
  background: #5d96ab;
  padding: 21px 20px 16px 20px;
  text-decoration: none;
  margin: 5px;
  position: relative;
  left: 38%;
  top: 150px;
  display: block;
}
.boton:hover{
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #144b70);
  background-image: -moz-linear-gradient(top, #3cb0fd, #144b70);
  background-image: -ms-linear-gradient(top, #3cb0fd, #144b70);
  background-image: -o-linear-gradient(top, #3cb0fd, #144b70);
  background-image: linear-gradient(top, bottom, #3cb0fd, #144b70);
  text-decoration: none;
}
#img{
  width: 20%;
  height: 10%;
}
#logo{
  position: relative;
  left: 38%;
}
</style>
<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet"/> <!--font-family: 'Quicksand', sans-serif;-->
<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"/> <!--font-family: 'Space Mono', monospace;-->
<link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet"/> <!--font-family: 'Megrim', cursive;-->
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"/> <!--font-family: 'Roboto', sans-serif;-->	
<link rel="stylesheet" href="estilos3.css"/>
</head>
<body>
  <div id="fondo">
  <div id="logo">
    <img src="Logo.jpg">
  </div>
  <form  action="PantallaInicio.php" method="POST">
   <input name="Registro" type="submit" class="boton" value="Registrar Usuario"  /> <br>
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
