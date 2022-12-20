<!-- Hacer un new Persona y pensar si es lógico hacerlo -->

<?php

class Person8 {

    public $name = "";
    public $surname = "";
    public $id = "";
    public $email = "";


    public function __construct($name, $surname, $id, $email)
    {
        $this-> name = $name;
        $this-> surname = $surname;
        $this-> id = $id;
        $this-> email = $email;
    }
    

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }


    public function getSurname(){
        return $this->surname;
    }

    public function setSurname($surname){
        $this->surname = $surname;
    }


    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }


    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
}

// Clase profesor, hereda de person4 ---------------------------------------------------------------------------------

class Teacher extends Person8 {

    public $impart = "";
    public $classroom = "";

    public function getImpart(){
        return $this->impart;
    }

    public function setImpart($impart){
        $this->impart = $impart;
    }


    public function getClassroom(){
        return $this->classroom;
    }

    public function setClassroom($classroom){
        $this->classroom = $classroom;
    }


    public function __construct($name, $surname, $id, $email, $impart, $classroom)
    {
        
        parent::__construct($name, $surname, $id, $email);
        $this->name = $name;
        $this->surname = $name;
        $this->id = $id;
        $this->email = $email;
        $this->impart = $impart;
        $this->classroom = $classroom;
        
        
    }
}

// Clase estudiante, hereda de person4 ---------------------------------------------------------------------------------
class Studen extends Person8 {
    public $learn = " ";
    public $teacher = " ";

    public function getLearn(){
        return $this->learn;
    }

    public function setLearn($learn){
        $this->learn = $learn;
    }


    public function getTeacher(){
        return $this->teacher;
    }

    public function setTeacher($teacher){
        $this->teacher = $teacher;
    }

    public function __construct($name, $surname, $id, $email, $learn, $teacher)
    {
        parent:: __construct($name, $surname, $id, $email, $learn, $teacher);
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
        $this->email = $email;
        $this->learn = $learn;
        $this->teacher = $teacher;
    }

}

// No es necesario hacer un new persona porque ya tenemos los datos en sus herederos.

$nuevaPerson = new Person8("Marco", "Galian", 1, 47);
echo $nuevaPerson->name;