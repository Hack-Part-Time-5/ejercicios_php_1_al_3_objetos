<!-- Crear dos subclases que extiendan de Persona, con propiedades y métodos:
- Estudiante y Docente. -->

<?php

class Person4 {

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

class Teacher extends Person4 {

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
class Studen extends Person4 {
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
        parent:: __construct($name, $surname, $id, $email);
        $this->name = $name;
        $this->surname = $surname;
        $this->id = $id;
        $this->email = $email;
        $this->learn = $learn;
        $this->teacher = $teacher;
    }

}

$teacher1 = new Teacher('Ana', 'Garcia', 1, 'ana84gr@gmail.com', 'php', 2);
$teacher2 = new Teacher('Mario', 'Ruiz', 2, 'mario35@gmail.com', 'javascript', 1);
$teacher3 = new Teacher('Andres', 'Pascual', 3, 'andrespl@gmail.com', 'boostrapt', 3);

echo "-- Profesores --".PHP_EOL.PHP_EOL;

echo "Nombre: " . $teacher1->name.PHP_EOL;
echo "Imparte clases de: " . $teacher1->impart.PHP_EOL;
echo "Email: " . $teacher1->email.PHP_EOL.PHP_EOL;

echo "Nombre: " . $teacher2->name.PHP_EOL;
echo "Imparte clases de: " . $teacher2->impart.PHP_EOL;
echo "Email: " . $teacher2->email.PHP_EOL.PHP_EOL;



$student1 = new Studen('Pablo', 'Saez', 50, 'pablitos@hotmail.com', 'boostrapt', 'Andres');
$student2 = new Studen('Pedro', 'Paso', 51, 'pasopedro@hotmail.com', 'javascript', 'Mario');
$student3 = new Studen('Andrea', 'Vicente', 52, 'vicentana@hotmail.com', 'php', 'Ana');

echo "-- Alumnos --".PHP_EOL.PHP_EOL;

echo "Nombre: " . $student1->name.PHP_EOL;
echo "Id: " . $student1->id.PHP_EOL;
echo "Mi Profesor: " . $student1->teacher.PHP_EOL;
echo "Aprendo: " . $student1->learn.PHP_EOL.PHP_EOL;

echo "Nombre: " . $student2->name.PHP_EOL;
echo "Id: " . $student2->id.PHP_EOL;
echo "Mi Profesor: " . $student2->teacher.PHP_EOL;
echo "Aprendo: " . $student2->learn.PHP_EOL;