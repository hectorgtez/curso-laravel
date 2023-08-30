<?php
include 'includes/header.php';

// Modificadores de acceso
// public -> Acceso en cualquier lugar (clase u objeto) 
// private -> Se usa en herencia
// protected -> Acceso solo desde la clase
class Empleado {
  protected $nombre;
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

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }
}

$hector = new Empleado("Hector", "Gutierrez", "TI", "hector@empresa.com", 007);
echo $hector->getNombre();
$hector->setNombre("Manuel");
echo $hector->getNombre();

echo "<pre>";
var_dump($hector);
echo "</pre><br>";