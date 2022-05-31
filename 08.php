<?php include 'includes/header.php';

require 'vendor/autoload.php';
//? Autoload
//* Al tener muchos requiere nos tocaría estar pendiente de cargar una clase que dependa de otra y no la cargamos en el orden correcto.
//? Namespace
//* En php no podemos tener dos clases ni carpetas que se llamen igual. Esto lo debemos tener en cuenta al momento de usar librerías ya que traen nombres por default por ejemplos los emails. Para esto usamos algo llamado namespace.
//* Esto no siempre se debe usar. La idea es tener clases separadas.

//Esto lo usamos para borrar el namespace desde la instancia. Esto se usa mucho en el freamwokr de Laravel.
use App\Clientes;
use App\Detalles;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

// Incluimos las clases
/* require 'Class/clientes.php';
require 'Class/detalles.php'; */

/* 
function mi_autoload($clase){ // Esta función debemos pasarla a la función autoload: spl_autoload_register
    $partes = explode('\\', $clase); //primer argumento lo que vamos a buscar y segundo donde lo vamos a buscar. Esto nos crea un arreglo dondee le va a dar a una posicón a App y otra a la clase.
    require __DIR__ . '/Class/' . $partes[1]. '.php'; //le damos la posición 1 ya que en ella se encuentra el nombre de la clase.
}

// Autoload
spl_autoload_register('mi_autoload'); // A pesar que es una función va entre comillas. */

/* class Clientes {
    public function __construct()
    {
        echo "Desde 08.php que contiene los clientes";
    }
} */

// Como vemos estamos usando dos clases con el mismo nombre
$clientes = new Clientes();
echo "<br>";
$detalles = new Detalles();
/* echo "<br>";
$clientes2 = new Clientes(); */


include 'includes/footer.php';