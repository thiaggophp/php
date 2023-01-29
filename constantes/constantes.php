<?php

//usar constantes sempre com letras maiúsculas
define("SERVIDOR", "127.0.0.1"); //nome da constante e valor

echo SERVIDOR; //mostra o valor da constante
echo "</br>";

//////////////////////////////////////////////////////////////////

//EXEMPLO 2 - Arrays de constantes
define("BANCO_DE_DADOS", ['127.0.0.1', 'root', 'password', 'teste']); 

print_r(BANCO_DE_DADOS);
echo "</br>";

//////////////////////////////////////////////////////////////////

//EXEMPLO 3 
echo PHP_VERSION;
echo "</br>";

//////////////////////////////////////////////////////////////////

//EXEMPLO 4
echo DIRECTORY_SEPARATOR;

?>