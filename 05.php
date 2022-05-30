<?php

use Transporte as GlobalTransporte;

 include 'includes/header.php';

//! PREGUNTA DE TRABAJO: ¿Qué es una clase abstracta?
//? Classes abstractas: Son aquellas que no se pueden instanciar solo se pueden heredar. NUNCA deben instanciarse.


//Clase Padre
abstract class Transporte{ //con abstract, evitamos que puedan instanciar.

    // Podemos heredar atributos
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    //Podemos heredar metodos
    public function getinfo() : string{
        return "El transporte tiene ". $this->ruedas ." ruedas, una capacidad de ". $this->capacidad. " personas";
    }

    public function getRuedas() : int {
        return $this->ruedas;
    }
}

//herederos o hijo
class Bicicleta extends Transporte {
    public function getinfo() : string{
        return parent::getinfo()." y no consume gasolina"; 
    }   
}

class Automovil extends Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
        
    }

    public function getTransmision() : string {
        return $this->transmision;
    }

    public function getInfo() : string {
        return parent::getInfo()." y tiene una transmisión " . $this->getTransmision();
    }

}

echo "<hr>";

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getinfo();

echo "<hr>";

$automovil = new Automovil(4, 5, 'manual');
echo $automovil->getinfo();


include 'includes/footer.php';