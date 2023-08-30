<?php
include 'includes/header.php';

// Tipado
class Empleado {
  public $nombre;
  public $apellido;
  public $departamento;
  public $email;
  public $codigo;

  public function __construct(string $nombre, string $apellido, string $departamento, 
    string $email, int $codigo) {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->departamento = $departamento;
    $this->email = $email;
    $this->codigo = $codigo;
  }
}

$hector = new Empleado("Hector", "Gutierrez", "TI", "hector@empresa.com", 7);

echo "<pre>";
var_dump($hector);
echo "</pre>";