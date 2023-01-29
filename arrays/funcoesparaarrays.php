<?php

$pessoas = array();

/*aqui vamos selecionar o array alvo para se adicionar itens e adicionando nele um outro array com mais características*/
array_push ($pessoas, array (
    'nome' => 'Joao', 'idade' => 20

));

array_push ($pessoas, array(
    'nome' => 'Glaucio', 'idade' => 20

));

print_r($pessoas);

?>