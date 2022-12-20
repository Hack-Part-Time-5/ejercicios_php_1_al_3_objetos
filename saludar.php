<!-- Crear una función saludar y la llamo (primero pública y luego privada). -->

<?php

class Saludar {
    
    public function saludoPublico (){
        echo "Soy un metodo publico";
    }

    private function saludoPrivado (){
        echo "Soy un metodo privado".PHP_EOL;
    }

    public function getPrivateSaludo (){
        $this->saludoPrivado();
    }

}

// Llamando a una funcion privada --------------------------
$callPrivateFunction = new Saludar();

$callPrivateFunction->getPrivateSaludo();

// Llamando a la funcion publica ---------------------------

$callPublicFunction = new Saludar();
$callPublicFunction->saludoPublico();

