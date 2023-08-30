<?php
include 'includes/header.php';

// Clases abstactas.
/*
  Es una clase que NO se puede instanciar,
  sirve como plantilla que permite heredar dicha clase a otras
*/
abstract class Persona {
  protected $nombre;
  protected $apellido;
  protected $email;
  protected $telefono;

  public function __construct($nombre, $apellido, $email, $telefono) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->telefono = $telefono;
  }

  public function mostrarInformacion() {
    echo "Nombre: ", $this->nombre, " ", $this->apellido, " Email: ", $this->email;
  }

  public function getTelefono() {
    return $this->telefono;
  }
}

class Empleado extends Persona {
  protected $codigo;
  protected $departamento;

  public function __construct($nombre, $apellido, $email, $telefono, $codigo, $departamento) {
    parent::__construct($nombre, $apellido, $email, $telefono);
    $this->codigo = $codigo;
    $this->departamento = $departamento;
  }
}

class Proveedor extends Persona {
  protected $empresa;

  public function __construct($nombre, $apellido, $email, $telefono, $empresa) {
    parent::__construct($nombre, $apellido, $email, $telefono);
    $this->empresa = $empresa;
  }

  public function mostrarInformacion() {
    echo "Nombre: ", $this->nombre, " ", $this->apellido, " Email: ", $this->email, " Empresa: ", $this->empresa;
  }
}

$empleado = new Empleado("Hector", "Gutierrez", "hector@empresa.com", 1234567890, 19, "TI");
$proveedor = new Proveedor("Deisy", "Payan", "deisy@empresa2.com", 9876543210, "Empresa proveedora");

echo "<pre>";
var_dump($empleado);
echo "</pre><br>";

echo "<pre>";
var_dump($proveedor);
echo "</pre><br>";

$empleado->mostrarInformacion();
echo "<br>";
$proveedor->mostrarInformacion();
echo "<br><br>";
echo $proveedor->getTelefono();