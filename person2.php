<!-- Modifico la visibilidad de las propiedades en la clase Persona,
cambiandolas a private. Imprimimos sin error(mapeamos). -->

<?php

class Person2 {

    private $name = "";
    private $surname = "";
    private $age = "";

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }

    public function getAge(){
        return $this->age;
    }

}

$person1 = new Person2('Julia', 'Ruiz', 25);

echo "Mi nombre es " . $person1->getName() . " " . $person1->getSurname() . " y tengo " . $person1->getAge() . " años.";