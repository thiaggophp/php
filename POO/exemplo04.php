<?php
//contrutores
class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }
}

$meuEndereco = new Endereco("Rua dos testes", "123" , "CidadeTeste");

var_dump($meuEndereco);

?>

