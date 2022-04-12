<?php
declare (strict_types = 1);
include 'includes/header.php';

// 1.Definir la clase:

//? SEGUNDA PIEDRA ANGULAR = ENCAPSULACIÓN:
// En POO hay un principio que dice: "Mientras más cerrado es mejor".
class Producto {
    // 2.Agregar atributos o variables:

    //* Modificadores de acceso.
    // Public - Se puede acceder y modificar en cualquier lugar, tanto en la clase como en el objeto.
    // Protected - Se puede acceder o modificar unicamente en la clase. 
    // private - Solo miembos de la misma clase pueden acceder a el. 

    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        
    }

    public function mostrarProducto () : void {
        echo "El producto es: ". $this->nombre ." Y su precio es: ". $this->precio;
    }

    //* Accediendo a un protected. Es obligatorio crear un metodo para poder acceder a él.
    // Get and Set: 
    public function getNombre() : string { // Get nos sirve para acceder a un valor o atributo.
        return $this->nombre;
    }

    public function setNombre(string $nombre){ // Set nos sirve para editar o modificar. Tenemos que pasarle por parametro el valor o atributo a modificar.
        $this->nombre = $nombre;
    }
}


//* 3. Instanciar
$producto = new Producto('Tablet', 400, true); 

$producto->setNombre('Nuevo nombre');
echo $producto->getNombre(); 


$producto2 = new Producto('Celular', 350, false);

include 'includes/footer.php';