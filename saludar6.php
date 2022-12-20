<!-- Hacer un overriding del método saludar. -->

<?php

class Saludar6 {

    public function saludoPrivado (){
        echo "Soy un metodo privado".PHP_EOL;
    }
}

class SaludarHijo extends Saludar6 {

    public function saludoPrivado (){
        echo "Soy el hijo de la funcion saludar de mi padre y la estoy anulando";
    }
}

$overriding = new SaludarHijo();

$overriding->saludoPrivado();

