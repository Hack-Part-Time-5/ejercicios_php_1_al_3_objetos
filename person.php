<!-- Crear una clase Persona que tenga propiedades públicas (nombre,
apellido y edad). Crear 2 personas, Julia y Mario. Imprimir su información -->

<?php


class Person {
    // Atributos / Caracteristicas / -> Propiedades:
    public $name = "" ;
    public $surname = "";
    public $age = "";

    // Acciones / -> Metodos:
    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;


    }

}

$person1 = new Person ('Julia', 'Ruiz', 25);
echo "La primera persona se llama " . $person1->name . " " . $person1->surname . " Y tiene " . $person1->age . " años.\n";
$person2 = new Person ('Mario', 'Solis', 30);
echo "La Segunda persona se llama " . $person2->name . " " . $person2->surname . " Y tiene " . $person2->age . " años.\n";
