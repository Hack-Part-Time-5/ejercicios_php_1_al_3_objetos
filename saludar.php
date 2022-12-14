<!-- Crear una función saludar y la llamo (primero pública y luego privada). -->

<?php

class Saludar {


    public function saludar($name){
        echo "Hola " . $name . " que tal estas. \n";
    }

    private function saludado($names){
        echo "Hola " . $names . " como estas hoy.";
    }

    public function getSaludado(){
        return $this->saludado("Marco");
    }
}

// Publica -------------------------------------
$public = new Saludar();

$public->saludar("Marco");


// Privada -------------------------------------

$private = new Saludar();

$private->getSaludado();