<?php
include 'includes/header.php';

// Getters y Setters
class Empleado {
  protected $nombre;
  protected $apellido;
  protected $departamento;
  protected $email;
  protected $codigo;

  public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->departamento = $departamento;
    $this->email = $email;
    $this->codigo = $codigo;
  }

  /*
    Get -> Para obtener un valor
    Set -> Para modificar un valor
  */

  public function getNombre() {
    return $this->nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public function getApellido() {
    return $this->apellido;
  }

  public function setApellido($apellido) {
    $this->apellido = $apellido;
  }

  public function getDepartamento() {
    return $this->departamento;
  }

  public function setDepartamento($departamento) {
    $this->departamento = $departamento;
  }

  public function getEmail() {
    return $this->email;
  }
  
  public function setEmail($email) {
    $this->email = $email;
  }

  public function getCodigo() {
    return $this->codigo;
  }

  public function setCodigo($codigo) {
    $this->codigo = $codigo;
  }
}

$hector = new Empleado("Hector", "Gutierrez", "TI", "hector@empresa.com", 007);

$hector->setNombre("Manuel");
echo $hector->getNombre();

$hector->setApellido("Zazueta");
echo $hector->getApellido();

$hector->setDepartamento("MKT");
echo $hector->getDepartamento();

$hector->setEmail("manuel@empresa.com");
echo $hector->getEmail();

$hector->setCodigo(19);
echo $hector->getCodigo();