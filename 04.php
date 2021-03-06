<?php include 'includes/header.php';

//? TERCERA PIEDRA ANGULAR = HERENCIA.
//* Una de las ventajas es que te permite re utilizar mucho código. Con la herencia podemos heredas atributos y metodos de la clase principal y los podemos modificar. 

//Clase Padre: Si necesitamos compartir atributos con la clase hijo los declaramos en la clase padre.
class Transporte{

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

//herederos o hijo: si necesiamos atributos o metodos que solo usaremos en la clase hijo, lo declaramo aquí mismo
class Bicicleta extends Transporte {
    public function getinfo() : string{ //Podemos heredar un metodo de la clase padre usando su mismo nombre y solo sería sobre escribirlo.
        return parent::getinfo()." y no consume gasolina"; //* Parent es un modificador que nos permite traernos el constructor padre.
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

$bicicleta = new Bicicleta(2, 1);
echo $bicicleta->getinfo();
/* echo $bicicleta->getRuedas(); */

echo "<hr>";

$automovil = new Automovil(4, 5, 'manual');
echo $automovil->getinfo();


include 'includes/footer.php';