<?php

define('SECRET', '123'); // in timpul executari

class Student {

    const TYPE = 'Visa'; // in timpul compilari
    public $name; // visiblila in clasa si infara 
    public $age;

    protected $CNP; // visibila doar in clasa si in Extends

    // (*) -> cind avem multe variabile de tip private trebuie sa creem __set si __get
    private $IBAN;  // visibila doar in clasa 
    private $card;
   // private $cv;

    public function __construct($name, $age, $CNP, $IBAN, $card, $cv){ // se apeleaza cind se initalizeaza clasa
        $this->name = $name;
        $this->age = $age;
        $this->CNP = $CNP;
        $this->IBAN = $IBAN;
        $this->card = $card;
        $this->cv = $cv;
    } 

    /**
     * Avem acces la varibile private si inafara clasei
     */
    public function __set($name, $value)
    {
        $this->$name = $value;
    }

     /**
     * Putem folosi varibile private si inafara clasei
     */
    public function __get($name)
    {
        return $this->$name;
    }

    public function get_student(){
        echo "Nume: $this->name, 
        Virsta: $this->age,
        CNP: $this->CNP, 
        IBAN: $this->IBAN, 
        Card: $this->card, 
        cvv: $this->cv </br>";

        echo "Constanta In classa -> " .self::TYPE . '</br>';
    }
    
}

$student = new Student('Petru Vinaga', '23', '202020', 'XXXX','4242424242','183');
$student->get_student();

class Facultate extends Student {

    const MAT = 'DA';
    public $facultate;

    public function __construct($name, $age, $CNP, $IBAN, $card, $cv, $facultate){
        $this->facultate = $facultate;
        parent::__construct($name, $age, $CNP, $IBAN, $card, $cv);
    }

    public function student_data(){
        echo "Nume: $this->name, 
            Virsta: $this->age,
            CNP: $this->CNP, 
            IBAN: $this->IBAN, 
            Card: $this->card, 
            cvv: $this->cv, 
            Facultatea: $this->facultate </br>";

        echo "Constanta In extends -> " .parent::TYPE . '</br>';
    }
}

$fac = new Facultate('Petru Vinaga', '23', '202020', 'XXXX','4242424242','183', 'Inginerie');
$fac->student_data();
echo 'In afara clasei '. Student::TYPE .'</br>';
echo 'In extend class '. Facultate::MAT . '</br>';