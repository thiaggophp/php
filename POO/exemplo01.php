<?php

class Pessoa {
    public $nome; //atributo
    public function falar(){ //método

        return "O meu nome é " . $this->nome; //atributo fora do método $nome. Atributo dentro do método $this->nome;

    }

}

$humano = new Pessoa();

$humano->nome = "Criando Um Nome";

echo $humano->falar();


?>