<?php include 'includes/header.php';

//? Interfaces :
    //* Las interfaces permiten agrupar un grupo de declaraciones de funciones, pero no las va a implementar. Son un plano de las funciones que tiene una clase. Basicamente nos dice que hace una clase, que funciones tiene, que datos tiene y retorna, pero no como lo hace. 
    //* Generalmente quien las creas son los lideres de proyecto. Una vez creadas nos obliga a usar esos metodos o funciones.

interface TransporteInterface {
    //Aclaramos la implementación de la clase, es decir que funciones tiene y que retornan.
    public function getinfo() : string; 
    public function getRuedas() : int;
        // Si en la interfaz retornamos un tipo de de dato diferente a la función, no nos va a dar error porque la interfaz solo define la forma no valida nada.
        // Si aclaramos una función que no tiene la clase sí nos mostrará el error en la clase.

}

class Transporte implements TransporteInterface{ //implements agrega la interfaz

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

include 'includes/footer.php';