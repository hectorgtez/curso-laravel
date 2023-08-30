<?php
include 'includes/header.php';

// Metodos
class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;
  public $codigo;

  public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->departamento = $departamento;
    $this->email = $email;
    $this->codigo = $codigo;
  }

  public function nombreEmpleado() {
    echo $this->nombre , " " , $this->apellido;
  }

  public function departamentoEmpleado() {
    return $this->departamento;
  }
}

$hector = new Empleado("Hector", "Gutierrez", "TI", "hector@empresa.com", 007);
$deisy = new Empleado("Deisy", "Payan", "RH", "deisy@empresa.com", 005);

echo "<pre>";
var_dump($hector);
echo "</pre><br>";
echo "<pre>";
var_dump($deisy);
echo "</pre>";

echo $hector->nombreEmpleado();
echo "<br>";
echo $hector->departamentoEmpleado();
echo "<br>";
echo $deisy->nombreEmpleado();
echo "<br>";
echo $deisy->departamentoEmpleado();
echo "<br>";