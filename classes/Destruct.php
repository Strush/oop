<?php 
// metoda __destruct, ea este apelata cand obiectul este distrus(la incheierea executiei)
// unset(destroy) // distrugem obiectul creat

class FNDestruct {
    public function __construct()
    {
        echo '{html ';
    }

    public function __destruct()
    {
        echo "html}";
    }

    public function setData($data){
        echo $data;
    }
}

$destroy = new FNDestruct();
$destroy->setData('Codul HTML ');


