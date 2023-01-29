<?php

/*O while é muito utilizado para banco de dados*/
$condicao = true;

while ($condicao) {

    $numero = rand(1, 10);

    if ($numero === 3) {

        echo "TRES!!!";
        $condicao = false;
    }else {
        echo $numero . " ";

    }
}

echo "</br>";

//do while: executa ao menos uma vez mesmo a condicao sendo falsa
//exemplo 2: 

$total = 150;
$desconto = 0.9;

do {

    $total *= $desconto;

} while ($total > 100);

echo $total;

?>