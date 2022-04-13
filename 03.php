<?php
declare (strict_types = 1);

use Producto as GlobalProducto;

include 'includes/header.php';

// 1.Definir la clase:

//? METODOS ESTATICOS = No necesitan instanciarse. Usan la palabra reservadas self.
class Producto {
    // 2.Agregar atributos o variables:

    // Se puede tener atributos estaticos
    public $imagen;
    public static $imagenPlaceHolder = "Imagen.jpg";

    public function __construct(public string $nombre, public int $precio, public bool $disponible, string $imagen)
    {
        if($imagen){
            self::$imagenPlaceHolder = $imagen;
        }
    }

    //* Metodo estatico
    public static function ImagenDelProducto() {
        return self::$imagenPlaceHolder;
    }
    public static function DatosDelProducto() {
        echo "Obteniendo datos del producto";
    }

    public function mostrarProducto () : void {
        echo "El producto es: ". $this->nombre ." Y su precio es: ". $this->precio;
    }
    public function getNombre() : string {
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

//Accedemos directamente sin instanciar. Notese la sintaxis especial.
//echo Producto::ImagenDelProducto();

// 3. Instanciar
$producto = new Producto('Tablet', 400, true, '2'); 
//Accedemos directamente sin instanciar. Notese la sintaxis especial.
echo $producto->ImagenDelProducto();

$producto2 = new Producto('Celular', 350, false, '');
echo $producto2->ImagenDelProducto();

include 'includes/footer.php'; 