<?php
include 'includes/header.php';

// Metodos estaticos
/*
  No requieren de una instancia para poder ser llamados,
  se usa el nombre de la clase, dos puntos dobles (::) y el nombre del método.
    Empleado::getNombre();
*/

// Atributos estáticos
/*
  No requieren de una instancia para acceder a ellos,
  se usa self, dos puntos dobles (::) y el nombre del atributo.
    self::$nombre;
*/
class Empleado {
  protected static $nombre;
  public $apellido;
  public $departamento;
  public $email;
  public $codigo;

  public function __construct($nombre, $apellido, $departamento, $email, $codigo) {
    self::$nombre = $nombre;
    $this->apellido = $apellido;
    $this->departamento = $departamento;
    $this->email = $email;
    $this->codigo = $codigo;
  }

  public static function getNombre() {
    return self::$nombre;
  }

  public function setNombre($nombre) {
    $this->nombre = $nombre;
  }

  public static function getEmpleado() {
    echo "Desde método estático";
  }
}

Empleado::getEmpleado();

$hector = new Empleado("Hector", "Gutierrez", "TI", "hector@empresa.com", 007);
echo $hector::getNombre();

echo "<pre>";
var_dump($hector);
echo "</pre><br>";