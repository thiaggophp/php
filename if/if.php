<?php

$qualASuaIdade = 30;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($qualASuaIdade < $idadeCrianca) {

    echo "Crianca";

} else if ($qualASuaIdade < $idadeMaior) {

    echo "Adolescente";

} else if ($qualASuaIdade < $idadeMelhor) {

    echo "Adulto";

} else {

    echo "Idoso";
}

echo "</br>";

//Operadores ternários
echo ($qualASuaIdade < $$idadeMaior ? "Menor de Idade" : "Maior de Idade"); // Se é igual a ? e : é igual a entao

?>