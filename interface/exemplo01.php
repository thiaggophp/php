<?php

interface Veiculo {

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}


class Mercedes implements Veiculo {

    public function acelerar($vel) { //o nome da variavel nao precisa ser o mesmo, mas do metodo sim

        echo "O veiculo acelerou até " . $vel . "km/h <br>";
 
    }

    public function frenar($vel) {

        echo "O veículo frenou até " . $vel . "km/h <br>";

    }

    public function trocarMarcha($marc) {

        echo "O veiculo engatou a marcha " . $marc;

    }

}

$carro = new Mercedes;

$carro->acelerar(110);
$carro->frenar(70);
$carro->trocarMarcha(1);

?>