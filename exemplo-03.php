<?php

	
	$nome = "Thiago";
	$site = 'www.sygmasistemas.com.br';
	$ano = 1989;
	$salario = 5500.99;
	$bloqueado = false;

	////////////////////////////////////////

	$frutas = array("abacaxi", "laranja", "manga"); 

	echo $frutas[2]; 

	$nascimento = new DateTime();

	//var_dump($nascimento); /*vê o tipo de dado*/

	////////////////////////////////////////

	$arquivo = fopen("exemplo-03.php", "r"); /*leitura de arquivo no pc*/
	//var_dump($arquivo);

	$nulo = NULL; //NULL é ausencia de valor
	$vazio = ""; //vazio reserva espaço na memoria


?>