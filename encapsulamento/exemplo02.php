<?php

class Pessoa {

    public $nome = "Teste Nome";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){ // quando é publico todo mundo vê e também porque está na mesma classeS

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }

}

class Programador extends Pessoa {

    public function verDados(){ // quando é publico todo mundo vê e também porque está na mesma classeS

        echo get_class($this) . "<br>"; 

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";

    }

}


$objeto = new Pessoa();

//echo $objeto->nome . "<br>";

//echo $objeto->idade . "<br>";

$objeto->verDados();



?>