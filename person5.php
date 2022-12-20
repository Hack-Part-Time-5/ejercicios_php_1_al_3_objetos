<!-- Modifico la visibilidad de las propiedades en la clase Persona, cambiando
algunas a protected. Imprimimos sin error(mapeamos). -->

<?php

class Person5 {

    protected $name = "";
    protected $surname = "";
    protected $id = "";
    protected $email = "";


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

class Teacher extends Person5 {

    protected $impart = "";
    protected $classroom = "";

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
class Studen extends Person5 {
    protected $learn = " ";
    protected $teacher = " ";

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

$teacher1 = new Teacher('Ana', 'Garcia', 1, 'ana84gr@gmail.com', 'php', 2);
$teacher2 = new Teacher('Mario', 'Ruiz', 2, 'mario35@gmail.com', 'javascript', 1);
$teacher3 = new Teacher('Andres', 'Pascual', 3, 'andrespl@gmail.com', 'boostrapt', 3);

echo "-- Profesores --".PHP_EOL.PHP_EOL;

echo "Nombre: " . $teacher1->getName().PHP_EOL;
echo "Imparte clases de: " . $teacher1->getImpart().PHP_EOL;
echo "Email: " . $teacher1->getEmail().PHP_EOL.PHP_EOL;

echo "Nombre: " . $teacher2->getName().PHP_EOL;
echo "Imparte clases de: " . $teacher2->getImpart().PHP_EOL;
echo "Email: " . $teacher2->getEmail().PHP_EOL.PHP_EOL;



$student1 = new Studen('Pablo', 'Saez', 50, 'pablitos@hotmail.com', 'boostrapt', 'Andres');
$student2 = new Studen('Pedro', 'Paso', 51, 'pasopedro@hotmail.com', 'javascript', 'Mario');
$student3 = new Studen('Andrea', 'Vicente', 52, 'vicentana@hotmail.com', 'php', 'Ana');

echo "-- Alumnos --".PHP_EOL.PHP_EOL;

echo "Nombre: " . $student1->getName().PHP_EOL;
echo "Id: " . $student1->getId().PHP_EOL;
echo "Mi Profesor: " . $student1->getTeacher().PHP_EOL;
echo "Aprendo: " . $student1->getLearn().PHP_EOL.PHP_EOL;

echo "Nombre: " . $student2->getName().PHP_EOL;
echo "Id: " . $student2->getId().PHP_EOL;
echo "Mi Profesor: " . $student2->getTeacher().PHP_EOL;
echo "Aprendo: " . $student2->getLearn().PHP_EOL;