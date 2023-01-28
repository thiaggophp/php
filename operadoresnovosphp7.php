<?php
//Operador Space Ship (Nave Espacial)
$a = 50;
$b = 35;

var_dump($a <=> $b); //operador spaceship
/* Resumo desse operador:
Se o a for maior, tras 1;
Se os dois forem iguais, tras 0;
Se o b for maior, tras -1; */

/////////////////////////////////////
echo "</br>";
//Operador NULL Coalesce
$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; //Mostra o a, mas se ele for nulo mostra o b, mas se ele for nulo, mostra o c
//obs: ele para no primeiro valor encontrado

/////////////////////////////////////////////////
echo "</br>";
//Operadores de incremento e decremento
$a = 10;
echo $a ++; //aqui o a ainda vale 10, pois pedimos para mostrar e depois incrementar.
echo "</br>";
//aqui mostra o a valendo 11:
echo $a;
echo "</br>";
//aqui mostra valendo 12, pois incrementamos primeiro:
echo ++ $a;
echo "</br>";

//////////////////////////////////////////////////

//Operadores lógicos:
$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 20; //as duas condicoes tem que ser verdadeiras pra dar verdadeiro
var_dump($resultado); 
echo "</br>";
$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3; //basta uma condicao verdadeira pra ser verdadeiro
var_dump($resultado2);


?>