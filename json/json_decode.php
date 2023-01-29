<?php

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":20}]';

$data = json_decode($json, true); //para transformar o json em array, passamos esse parametro true, senao ele joga como objeto

var_dump($data);

?>