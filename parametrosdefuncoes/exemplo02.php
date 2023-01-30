<?php

function ola(){

    $argumentos = func_get_args(); // mostra todos os parâmetros contidos na chamada da função 

    return $argumentos;
}

var_dump(ola("Bom dia", 10, "teste", false));

?>