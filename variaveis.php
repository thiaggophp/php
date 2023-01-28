<?php
    
/*exemplo 01*/
//declarando variáveis e atribuindo valores
    
$nome = "HCode";
echo $nome; //mostra o nome na tela
//var_dump($nome); mostra o tipo de dado, tamanho e valor
echo "<br/>"; //quebra de linha
    
/*Exemplo 02*/
//padrao de escrita das variaveis (camelCase)

$anoNascimento = 1990;
$nomeCompleto = " ";
$nome1 = "Joao";
$sobrenome = " da Silva"; 
$nome_Completo = $nome1 . $sobrenome; //aqui concatenamos os nomes

echo $nome1;
echo "<br/>"; //quebra de linha

unset($nome_Completo); //limpando a variável da memória

//nesse if só mostra a variável se ela estiver definida, portanto como limpei antes nao vai mostrar
if (isset($nome_Completo)) {
    echo $nome_Completo;

}

?>