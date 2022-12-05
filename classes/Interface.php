<?php
// Toate metodele din interfete sunt automat publice
// Un iterface are nevoie clasele/functiile copiilor pentru a indeplini sarcini
// Nu putem crea exemplare ex: new Dayss() => return error
// Supporta Mostenirea multipla

interface Card {
    public function is_card(); // se inregistreaza functia
}

interface Pin {
    public function is_pin();
}

// exemplu mostenire
interface Iban extends Card {
    public function is_iban();
}

class Money implements Card, Pin {
    public function is_card()
    {
        echo "Card ->";
        echo "Is_card";

    }

    public function is_iban()
    {
        echo 'Iban';
    }
	public function is_pin() {
        echo 'Pin';
	}
}


$days = new Money();
$days->is_card();
$days->is_iban();