<?php
/* Parâmetros por valor e por referência*/

$a = 10;

function trocaValor($b){ //passagem de valor por valor

    $b += 50;

    return $b;
}

echo trocaValor($a); //aqui ela vai com valor = 60 por causa da chamada da função

echo "<br>";

echo $a; //aqui ela vai com valor 10 pois não foi chamada a função, então ela mantém seu valor original

echo "<br>";
echo "<br>";

/////////////////////////////////////////////////////////////////

$x = 10;

function trocaValor2(&$y){ //passagem de valor por referencia

    $y += 50;

    return $y;
}

echo trocaValor2($x); //aqui ela vai com valor = 60 por causa da chamada da função

echo "<br>";

echo trocaValor2($x); //aqui vai com valor 110, pois somou os 60 que era o novo valor

echo "<br>";

echo $x; //aqui ela vai com valor 110, pois a passagem por referencia muda o valor da variavel após a chamada da função 


?>