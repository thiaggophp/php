<?php

$nome = "Glaucio"; //Aqui a variável está fora do escopo

function teste() {
    global $nome; //aqui quer dizer que a variavel nome é a mesma q está fora
    echo $nome;
    echo "</br>";
}

function teste2() {
    $nome = "Joao";
    echo $nome . " Agora no teste 2";
}

teste();
teste2();

?>