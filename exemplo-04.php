<?php

$nome = (int)/*faz uma conversão na variável*/$_GET["a"];
$nome2 = $_GET["b"]; /*na url, vai existir uma interrogação, e esse comando vai pegar tudo após essa interrogação, que são variáveis e mostrar. ex: http://localhost/variaveis/exemplo-04.php?a=123 (completei com ?a=123)
/*para pegar mais de uma variável fazemos o seguinte: http://localhost/variaveis/exemplo-04.php?a=123&b=456*/
var_dump($nome); //também pode mostrar com echo
var_dump($nome2);

//para pegar o ip do usuário:
$ip = $_SERVER["REMOTE_ADDR"]; //variaveis pré definidas ou arrays super globais.
echo "$ip";

?>