<?php

$meses = array(
    "Janeiero", "Fevereiro", "Marco", "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro" 
);

foreach ($meses as $index => $mes) {

    echo "Indice: " . $index . "<br>";
    echo "O mes é: " . $mes;
    echo "</br>";
    echo "</br>";
}

?>



<form>
    <input type="text" name = "nome">
    <input type="date" name = "nascimento">
    <input type="submit" value = "OK">

</form>

<?php
//exemplo 2 para matar a saudade do html também

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value;
        echo "<hr>";
    
    }
}

?>
