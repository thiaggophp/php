<?php

require_once("config.php"); //fazendo o require do arquivo config.php para iniciar a sessao

$_SESSION["nome"] = "HCode"; 

echo $_SESSION['nome'];

?>