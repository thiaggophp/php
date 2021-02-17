<?php

$nome = "Thiago";	

function teste(){

	global $nome;
	echo $nome;

}

function teste2(){
	global $nome;
	echo "<br/>";
	echo $nome." agora no teste2";

}

teste();
teste2();

?>