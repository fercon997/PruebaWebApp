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
<script src="https://use.fontawesome.com/5643167d36.js"></script>
<style type="text/css">
  .error{
    color: red;
  }
</style>

</head>

<body>

<h1>Ejemplo de registro</h1> <!--titulo-->

<h2>Reg&iacute;strate en Done!</h2>

<!-- -inicia el formulario----------------------------- -->
<?php
  $nameErr = $namepErr = $apellidoErr =$passwordErr = $password2Err ="";
  $nombrep = $apellido =$nombre = $email = $pass = $pass2 = "";
  $nacimiento = "";
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email_usuario"];
    $nacimiento = $_POST["fecha_nacimiento"];
    
    if(empty($_POST["nombre_persona"])){
      $namepErr = "Se requiere su nombre";
    } else{
      $nombrep = comprobar($_POST["nombre_persona"],$namepErr);
    }

    if(empty($_POST["apellido_persona"])){
      $apellidoErr = "Se requiere su apellido";
    } else{
      $apellido = comprobar($_POST["apellido_persona"],$apellidoErr);
    }

    if(empty($_POST["nombre_usuario"])){
      $nameErr = "Se requiere un nombre de usuario";
    } else{
      $nombre = comprobar($_POST["nombre_usuario"], $nameErr);
    }
    if (empty($_POST["contrasena_usuario"])){
      $passwordErr = "Se requiere una contraseña";
    } else{
      $pass = comprobar($_POST["contrasena_usuario"], $passwordErr);
    }
    if(empty($_POST["contrasena_usuario_repetir"])){
      $password2Err = "Se requiere que repita la contraseña";
    } else{
      $pass2 = comprobar($_POST["contrasena_usuario_repetir"], $password2Err);
      $password2Err = validarContrasenas($_POST["contrasena_usuario"],$_POST["contrasena_usuario_repetir"]);
    }
  }
  
  function comprobar($dato, &$err){
    if(strlen($dato) <= 50){
      $err = "";
      return $dato;
    } else{
    $err = "El campo no puede ser mayor a 50 caracteres";
      return "";
    }
  }

  function validarContrasenas($contra1, $contra2){
    if($contra1 === $contra2){
      return "";
    } else{
      return "Las contrasenas no coinciden";
    }
  }
?>

<form method="post" name="datos_usuario" id="datos_usuario" autocomplete="off" action="Registro.php">
  <table align = "center">
    <tr>
      <td id="identificadorentrada">Nombre</td>
      <td>
        <label for="nombre_persona"></label>
        <input type="text" name="nombre_persona" id="nombre_persona" placeholder="Introduzca su nombre"><a href="#" data-toggle="tooltip" title="<?php echo $namepErr; ?>"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color: black"></i>
        </a>
      </td> 
    </tr>

    <tr>
      <td id="identificadorentrada">Apellido</td>
      <td>
        <label for="apellido_persona"></label>
        <input type="text" name="apellido_persona" id="apellido_persona" placeholder="Introduzca su apelldo">

        <a href="#" data-toggle="tooltip" title="<?php echo $apellidoErr; ?>"><i class="fa fa-exclamation-circle" aria-hidden="true" style="color: black"></i>
        </a>

      </td>
    </tr>

    <tr>
      <td id ="identificadorentrada">E-mail</td>
      <td><label for="email_usuario"></label>
      <input type="email" name="email_usuario" id="email_usuario" placeholder="Introduzca un email válido"><a href="#" data-toggle="tooltip" title=""> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color: black"></i>
        </a></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Nombre de usuario</td>
      <td><label for="nombre_usuario"></label>
      <input type="text" name="nombre_usuario" id="nombre_usuario" placeholder="Elija nombre de usuario"><a href="#" data-toggle="tooltip" title="<?php echo $nameErr; ?>"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color: black"></i>
        </a></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Contraseña</td>
      <td><label for="contrasena_usuario"></label>
      <input type="password" name="contrasena_usuario" id="contrasena_usuario" placeholder="Elija constraseña"><a href="#" data-toggle="tooltip" title="<?php echo $passwordErr; ?>"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color: black"></i>
        </a></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Repetir contraseña</td>
      <td><label for="contrasena_usuario_repetir"></label>
      <input type="password" name="contrasena_usuario_repetir" id="constrasena_usuario_repetir" placeholder="Verificar contraseña"><a href="#" data-toggle="tooltip" title="<?php echo $password2Err; ?>"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color: black"></i>
        </a></td>
    </tr>

    <tr>
      <td id ="identificadorentrada">Fecha de nacimiento</td>
      <td><label for="fecha_nacimiento"></label>
      <input type="date" name="fecha_nacimiento" id="fecha_nacimiento"><a href="#" data-toggle="tooltip" title=""> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color: black"></i>
        </a></td>
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

<h3>Done!</h3>

<ul>

<li><img id ="icono" src="plus.svg" height="40" width="40"/><b id="descripcion_icon">Añade tareas por hacer.</b></li>
<li><img id ="icono" src="error.svg" height="40" width="40"/><b id="descripcion_icon">Elimina tareas añadidas.</b></li>
<li><img id ="icono" src="success.svg" height="40" width="40"/><b id="descripcion_icon">Marca tus tareas como completadas.</b></li>
<li><img id ="icono" src="smartphone.svg" height="40" width="40"/><b id="descripcion_icon">Disponible en dispositivos Android.</b></li>
<li><img id ="icono" src="list.svg" height="40" width="40"/><b id="descripcion_icon">Categoriza tus tareas.</b></li>

</ul>

<?php
  include("Usuario.php");
  include("Validador.php");
    $usuario1 = new Usuario($nombrep,$apellido,$nombre,$pass,$pass2,$email,$nacimiento);
  if (isset($_POST["enviando"])) {
    $usuario1->transformToJson();
  }
?>

</body>

</html>