<?php

// Functia statica nu are nevoie de a crea o instanta
// Se poate apela direct ex: nume_clasa::nume_functie

// (*) FN -> function
class FNStatic {

    public function __construct(){}

    protected static function FNProtected(){
        echo "Functie static protected </br>";
        echo "From develop branch";
    }

    private static function FNPrivate(){
        echo "Functie static private </br>";
        echo "From develop branch";
    }

    public static function FNPublic(){
        echo "Functie static publica </br>";
        self::FNPrivate();
    }
}
FNStatic::FNPublic();

class FNExtend extends FNStatic {
   public function __construct(){
    parent::FNProtected();
    //parent::FNPrivate() // error
   }
}

new FNExtend();
