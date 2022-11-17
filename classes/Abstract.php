<?php
// Nu putem crea o instanta ex: new Days() => return error
// Putem doar sa extinda aceste clasele abstracte
// O clasa abstracta are nevoie clasele copiilor pentru a indeplini sarcini
// Supporta Mostenirea simpla

abstract class Days {
    public $day;

    public function __construct($day){
        $this->day = $day;
    }
    
    abstract public function is_day(); // trebuie numai decit sa apelaze in clasa Day
}

class Day extends Days { // clasa copil
     public function is_day() // obligatoriu trebuie sa apeleze
    {
        echo "</br> Eu sunt o clasa abstracta in ziua $this->day </br>";
    }
}

// $ex = new Days() => return error
$day = new Day('Luni');
$day->is_day();
