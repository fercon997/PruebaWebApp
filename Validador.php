<?php

class Validador{

//atributos
private $datos_json;
private $usuarios_registrados;


//constructor
function Validador($nombre_archivo){
     $this->datos_json = file_get_contents($nombre_archivo);
}




//metodos
function validarinicio($nombre){

  $this->usuarios_registrados = json_decode($this->datos_json);
  foreach ($this->usuarios_registrados as $usuario_registrado);

  for ($i=0; $i<(count($usuario_registrado));$i++){
    if ($usuario_registrado[$i]==$nombre) return true;
  }
  return false;
}



}

 ?>
