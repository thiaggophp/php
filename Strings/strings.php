<?php

$nome = "HCode";
$nome2 = 'Treinamentos';

var_dump($nome, $nome2);

//diferenca entre aspas simples e aspas duplas

echo "ABC $nome</br>"; //aqui mostra o valor da variavel
echo 'ABC $nome'; //aqui mostra o nome dela
echo "</br>";

//Exemplo 2
$nome3 = "Joao sem nome";
echo strtoupper($nome3); //funcao que transforma a string para tudo maiusculo
echo "</br>";
echo strtolower($nome3); //funcao que transforma a string para tudo minusculo
echo "</br>";
echo ucwords($nome3); //funcao que transforma somente a primeira letra de cada palavra da string para maiusculo
echo "</br>";

//Exemplo 3
$empresa = "HCode";

$empresa = str_replace("e", "3", $empresa); //troca o valor de uma letra por outro
echo $empresa;
echo "</br>";

//Exemplo 4
$frase = "A repeticao é a mae da rentencao.";
$palavraProcurada = strpos($frase, "mae"); //a partir da letra zero, tem 17 casas até chegar em mae
var_dump($palavraProcurada);

//importante essa
$texto = substr($frase, 0, $palavraProcurada); /*aqui vai mostrar o texto que encontrar da posicao zero até a palavra mae 
que foi procurada anteriormente e achada na posicao 17*/
var_dump($texto);

$texto2 = substr($frase, $palavraProcurada + strlen($palavraProcurada)); /*aqui mostra de mae pra frente*/
var_dump($texto2);

?>