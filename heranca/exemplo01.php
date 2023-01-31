<?php

class Documento {

    private $numero;

    //criando get e set
    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($n)
    {
        $this->numero = $n;

        return $this;
    }

}

class CPF extends Documento {

    public function validar():bool{

        $numeroCPF = $this->getNumero();

        //validação do CPF

        return true;

    }
}

$doc = new CPF;

$doc->setNumero("12345678901");

var_dump($doc->validar());

echo "<br>";

echo $doc->getNumero();

?>