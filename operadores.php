<?php
//operadores de atribuicao:
$nome = "HCode"; // atribuicao

echo $nome . " mais alguma coisa<br>"; //concatenacao

$nome .= " Treinamentos<br>"; //aqui a variavel tera o valor dela e mais alguma coisa

echo $nome;
echo "</br>";

//mais casos de variável que somam elas mesmas mais alguma coisa
$valorTotal = 0;

$valorTotal += 100;
$valorTotal += 25;
$valorTotal *= .9; // cálculo de 10% de desconto usando esse operador, ou seja, 90% desse valor

echo "O valor total é: ", $valorTotal;
echo "</br>";

////////////////////////////////////////////////////////

//operadores aritméticos:
$a = 10;
$b = 2;

echo "O valor de a + b é: ", $a + $b; //adicao
echo "</br>";
echo "O valor de a * b é: ", $a * $b; //multiplicacao
echo "</br>";
echo "O valor de a / b é: ", $a / $b; //divisao
echo "</br>";
echo "O valor de a - b é: ", $a - $b; //subtracao
echo "</br>";
echo "O resto ou módulo de a / b é: ", $a % $b; //módulo
echo "</br>";
echo "a elevado a b é: ", $a ** $b; //potenciacao
echo "</br>";

/////////////////////////////////////////////////

//operadores de comparacao:
$a = 30;
$b = 55;

var_dump($a > $b); //fazendo isso ele retorna verdadeiro ou falso
echo "</br>";
var_dump($a < $b);
echo "</br>";
var_dump($a == $b); //igual de comparacao de valor e nao de tipo. Para tipo ou identidade é ===)
echo "</br>";
var_dump($a >= $b); 
echo "</br>";
var_dump($a <= $b); 
echo "</br>";
var_dump($a != $b); //diferente - comparacao de valor e nao de tipo. Para tipo ou identidade é !==

?>