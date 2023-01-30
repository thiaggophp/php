<?php

require_once("config.php");

session_unset(); /*limpa variaveis de sessao, mas para o site voce continua sendo a mesma pessoa
/*temos também o comando session_destroy, que limpa variaveis e remove o usuario, é como se vc tivesse um novo acesso no servidor*/

echo $_SESSION['nome'];

?>