<?php
include 'includes/header.php';
include 'DB.php';

// Comunicar dos clases
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
$nombre = $hector->getNombre();

$db = new DB($nombre);
$db->guardar();