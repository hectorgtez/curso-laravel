<?php
include 'includes/header.php';

// Atributos de una clase
class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;
  public $codigo;
}

$empleado = new Empleado;
$empleado->nombre = "Hector";
$empleado->apellido = "Gutierrez";

echo "<pre>";
var_dump($empleado);
echo "</pre>";

$empleado2 = new Empleado;
$empleado2->nombre = "Deisy";
$empleado2->apellido = "Payan";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";