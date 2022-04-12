<?php
declare (strict_types = 1);
include 'includes/header.php';

//*? Hay 3 pasos principales que debemos aplicar:

//* 1. Definir la clase:

//palabra reservada + nombre de la clase (se recomienda que inicie con mayusculas) y todas las classes se abren entre llaves.
class Producto {
    // Cuerpo de la classe, aquí pdoremos insertar atributos o funciones.
    //* 2. Agregar atributos o variables:

    //! Esto es sintaxis antiguas a php 8.
/*     public $nombre; //* Esto en POO no se le reconoce como variables sino como atributo o propiedades.
    public $precio;
    public $disponible;
    //* Constructor = Una función que se llama automaticamente se instancie la clase:
                                //Soporta el tipado.
    public function __construct(string $nombre, int $precio, bool $disponible) //Por acá pasamos los datos. __construct se le conoce como metodos magicos en php y este es el mas común. En otros lenguajtes el constructor es el mismo nombre de la clase, pero en php es obligatoria esta sintaxis.
    {
        $this->nombre = $nombre; // this se refiere es al objeto o la instancia que se ha creeado con el nuevo producto y es una sintaxis especial de php. Se le conoce como función flecha.
        $this->precio = $precio;
        $this->disponible = $disponible;
    } */

    //! Esta es la sintaxis de php 8.

    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        
    }

    //Creamos nuestra función, pero dentro de las clases se les conoce como Metodos. 
    //* Metodos = son similares a las funciones solo que inician con el modificador de acceso public y se pueden crear las necesarias, pero solo se podrán con los objetos declarados dentro de la clase. 
    public function mostrarProducto () {
        echo "El producto es: ". $this->nombre ." Y su precio es: ". $this->precio;
    }
}
//? Definir atributos y metodos se le conoce como la abstracción, es decir la forma que van a tener nuestras clases.


//* 3. Instanciar
$producto = new Producto('Tablet', 400, true); //siempre que vayamos a instanciar una clase debemos colocar el new.
// Ejecutamos el metodo.
$producto->mostrarProducto();

//asignamos valores  a los atributos
/* $producto->nombre = 'Tablet'; // Como es un objeto se cambia la forma de acceder. Se le conoce como sintaxis flecha.
$producto->precio = 350;
$producto->disponible = true; */
 
echo "<pre>";
var_dump($producto);
echo "</pre>";

//* Una de las ventjas de POO s que nos permite instanciar varios objetos 
$producto2 = new Producto('Celular', 350, false);
$producto2->mostrarProducto();
/* $producto->nombre = 'Celular'; 
$producto->precio = 450;
$producto->disponible = false; */
 
echo "<pre>";
var_dump($producto);
echo "</pre>";


include 'includes/footer.php';