<?php

class Carro {
    
    private $modelo;
    private $motor;
    private $ano;

    public function getModelo(){

        return $this->modelo;
    }
    public function setModelo($modelo){ //aqui pode entrar validações

        $this->modelo = $modelo;

    }

    public function getMotor():float{
        
        return $this->motor;

    }
    public function setMotor($motor){ //aqui pode entrar validações

        $this->motor = $motor;

    }

    public function getAno():int{

        return $this->ano;
    }
    public function setAno($ano){ //aqui pode entrar validações

        $this->ano = $ano;

    }

    public function exibir(){

        return array(
            "modelo" => $this->getModelo(),
            "motor" => $this->getMotor(),
            "ano" => $this->getAno()
        );
    }
}

$gol = new Carro();

$gol->setModelo("Gol Quadrado");
$gol->setMotor("1.6");
$gol->setAno("1996");

print_r($gol->exibir());

?>