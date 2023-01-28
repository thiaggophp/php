<?php

include "exemplo1.php"; //trouce o exemplo1.php pra ca, se fosse em outra pasta use: nomedapasta/nomedoarquivo.
//para navegar em um diretorio antes use ../nomedapasta/nomedoarquivo

$resultado = somar(18, 20);

echo $resultado;

/*include e require sao aparentemente iguais, mas existem diferencas:
    require -> o require obriga que o arquivo esteja funcionando e existe;
    include -> tenta funcionar mesmo que o arquivo esteja com problema e nao exista.*/

?>