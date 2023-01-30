<?php

function ola($texto) {

    return "Olá $texto!<br>";
}

echo ola("mundo"); //mandando mundo como parâmetro de texto para função acima
echo ola("fulano");
echo ola("ciclano");


//exemplo 2
function ola2($texto = "teste", $periodo = "Bom dia") { /*valores obrigatórios (que possuem valores padrão) sempre à esquerda, já
    os que não possuirem valores obrigatórios, coloque à direita para facilitar*/

    return "Olá $texto! $periodo <br>";
}

echo ola2(); //mandando mundo como parâmetro de texto para função acima

?>

