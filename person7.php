<!-- Crear una función en persona, por ejemplo (comer) que no se pueda
sobreescribir en las clases hijas. -->

<?php


class Person7 {

    public $name = "" ;
    public $surname = "";
    public $age = "";


    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }

    // El metodo Comer no se puede sobreescribir al llevar la palabra reservada final al inicio, tambien se puede hacer en una clase.
    final function Comer(){
        echo "Esta funcion no se puede sobreescribir por sus clases hijas";
    }

}