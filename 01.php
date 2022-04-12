<?php
declare (strict_types = 1);
include 'includes/header.php';

//*? Hay 3 pasos principales que debemos aplicar:

//* 1. Definir la clase:

//palabra reservada + nombre de la clase (se recomienda que inicie con mayusculas) y todas las classes se abren entre llaves.
class Producto {
    // Cuerpo de la classe, aquí pdoremos insertar atributos o funciones.
    //* 2. Agregar atributos o variables:
    public $nombre; //* Esto en POO no se le reconoce como variables sino como atributo o propiedades.
    public $precio;
    public $disponible;

    //* Constructor = Una función que se llama automaticamente se instancie la clase:
                                // Soporta el tipado.
    public function __construct(string $nombre, int $precio, bool $disponible) //Por acá pasamos los datos. 
    {
        $this->nombre = $nombre; // this se refiere es al objeto o la instancia que se ha creeado con el nuevo producto. 
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}



//* 3. Instanciar
$producto = new Producto('Tablet', 400, true); //siempre que vayamos a instanciar una clase debemos colocar el new.

//asignamos valores  a los atributos
/* $producto->nombre = 'Tablet'; //* Como es un objeto se cambia la forma de acceder. Se le conoce como sintaxis flecha.
$producto->precio = 350;
$producto->disponible = true; */
 
echo "<pre>";
var_dump($producto);
echo "</pre>";

//* Una de las ventjas de POO s que nos permite instanciar varios objetos 
$producto2 = new Producto('Celular', 350, false); 
/* $producto->nombre = 'Celular'; 
$producto->precio = 450;
$producto->disponible = false; */
 
echo "<pre>";
var_dump($producto);
echo "</pre>";


include 'includes/footer.php';