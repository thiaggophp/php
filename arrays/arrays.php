<?php

$frutas = array("Laranja", "Abacaxi", "Melancia");
print_r($frutas); //exibe  o array e sua estrutura
echo "</br>";
/*Lembrar: Todo array se inicia na posicao 0*/


//Exemplo 2 - arrays bidimensionais
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];
echo "</br>";
echo end($carros[1]);

?>