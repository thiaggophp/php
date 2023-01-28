<?php

//tipos básicos 
$nome = "HCode"; //string
$site = 'www.hcode.com.br'; //string
$ano = 1990; //int
$salario = 5500.99; //ponto flutuante
$bloqueado = false; //booleano

//tipos compostos
$frutas = array("abacaxi", "laranja", "manga"); //array
echo $frutas[2];
echo "</b>";

$nascimento = new DateTime(); //objeto
var_dump($nascimento); //mostra o tipo de dado
echo "</b>";

//resource e NULL
$arquivo = fopen("variaveis.php", "r");  //resource
var_dump($arquivo);

$nulo = NULL; //NULL (ausencia de valor) isso é diferente de vazio $vazio = " " (foi iniciado mas nao possui valor)
var_dump($nulo);

?>