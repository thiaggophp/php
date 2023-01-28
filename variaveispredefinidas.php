<?php
//variaveis super globais $_POST, $_SESSION

$nome = $_GET["a"]; //esse $_GET é um array Super Global (variaveispredefinidas?a=123) digitar isso no navegador, o 123 é o valor recebido via get do formulario e transformado pra int
$numero = (int)$_GET["b"];
var_dump($nome);
var_dump($numero);

//para enviar mais de uma informacao via GET -> http://teste/variaveispredefinidas?a=123&b=456

//como pegar o ip do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo $ip;
echo "</br>";

//ver quais arquivos de página estao sendo usadas
$page = $_SERVER["SCRIPT_NAME"];
echo $page;

?>