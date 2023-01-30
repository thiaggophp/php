<?php

/*Conceito: Toda função precisa retornar um valor , se caso isso não acontecer, ela vira uma rotina*/

function ola() {

    return "Olá Mundo! <br>";
}

echo ola();

$frase = ola();

echo strlen($frase);

?>