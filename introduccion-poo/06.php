<?php
include 'includes/header.php';

// Constructor Property Promotion
class Empleado {
  public function __construct(
    public $nombre,
    public $apellido,
    public $departamento,
    public $email,
    public $codigo
  ) {}
}

$hector = new Empleado("Hector", "Gutierrez", "TI", "hector@empresa.com", 007);
$deisy = new Empleado("Deisy", "Payan", "RH", "deisy@empresa.com", 005);

echo "<pre>";
var_dump($hector);
echo "</pre><br>";
echo "<pre>";
var_dump($deisy);
echo "</pre>";