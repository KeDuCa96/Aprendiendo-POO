<?php

include 'includes/header.php';

//? Polimorfismo:
//* Hay diferentes ejemplos. Tiene que ver con la interfaz y la herencia.
//* Aquí los objetos pueden tener diferentes formas.
//* Diferentes clases implementan una misma interfaz.

interface TransporteInterface {

    public function getinfo() : string; 
    public function getRuedas() : int;
}

class Transporte implements TransporteInterface{ 

    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getinfo() : string{
        return "El transporte tiene ". $this->ruedas ." ruedas, una capacidad de ". $this->capacidad. " personas";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

// Ejemplo de polimorfismo, cada objeto tiene su propopia forma.
class Automovil extends Transporte implements TransporteInterface{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getinfo() : string{
        return parent::getinfo()." y tiene un color ". $this->color;
    }

    // NO es obligatorio declarar todos los metodos en las interfaces.
    public function getColor() : string{ 
        return "El color es ". $this->color;
    }
}

echo "<pre>";

var_dump($transporte = new Transporte(8, 20));
var_dump($auto = new Automovil(8, 20, 'rojo'));

echo $transporte->getinfo();
echo "<br>";
echo $auto->getinfo();
echo "<br>";
echo $auto->getColor();
echo "<pre>";



include 'includes/footer.php';