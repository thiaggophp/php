<?php
	$anoNascimento = 1989;
	$nome = "Thiago";
	$sobrenome = "Ramos";
	$nomeCompleto = $nome. " " .$sobrenome; /*o ponto concatena as variáveis*/


	echo "$anoNascimento";

	echo "<br/>"; //quebra de linha
	//exit(); o programa nao executa nada daqui pra baixo
	echo "$nomeCompleto";


	unset($anoNascimento); //limpa a variável
	if (isset($anoNascimento)){ /*valida se a variável foi definida ou nao (se está vazia ou preenchida)*/
		echo "$anoNascimento";
	}
	
?>