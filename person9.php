<!-- Añadir un contador de objetos de clase Persona. -->

<?php

class Person9 {

    private $name = "";
    private $id = "";

    private static $numPerson = 0;

    public function __construct($name, $id)
    {
        $this->name = $name;
        $this->id = $id;
        self::$numPerson += 1;
    }

    public function __destruct()
    {
        // echo "Paso por el destruct.";
        self::$numPerson -= 1;
    }

    public static function getNumPerson(){
        return self::$numPerson;
    }
    
    public function getName(){
        return $this->name;
    }

    public function getId(){
        return $this->id;
    }

}



class Teacher extends Person9 {

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


    public function __construct($name, $id, $impart, $classroom)
    {
        
        parent::__construct($name, $id);
        $this->name = $name;
        $this->id = $id;
        $this->impart = $impart;
        $this->classroom = $classroom;
        
        
    }
}



class Studen extends Person9 {
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

    public function __construct($name, $id, $learn, $teacher)
    {
        parent:: __construct($name, $id);
        $this->name = $name;
        $this->id = $id;
        $this->learn = $learn;
        $this->teacher = $teacher;
    }

}


echo "Hay " . Person9::getNumPerson() . " personas.".PHP_EOL;
$prof = new Teacher("Alba", 1, "Javascript", 5 );
echo "Hay " . Person9::getNumPerson() . " personas.".PHP_EOL;
$alum1 = new Studen("marco", 1, "javascript", "Alba");
echo "Hay " . Person9::getNumPerson() . " personas.".PHP_EOL;
$alum2 = new Studen("Luis", 2, "javascript", "Alba");
echo "Hay " . Person9::getNumPerson() . " personas.".PHP_EOL;
$alum3 = new Studen("Marta", 3, "javascript", "Alba");
echo "Hay " . Person9::getNumPerson() . " personas.".PHP_EOL;
$alum4 = new Studen("Andrea", 4, "javascript", "Alba");
echo "Hay " . Person9::getNumPerson() . " personas.".PHP_EOL;