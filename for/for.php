<?php

for ($i = 0; $i < 10; $i++) { /// $i-- para decrementar e $i += 5 para incrementar um numero diferente de 1

    echo $i . "</br>";
}

echo "</br>";


//outro exemplo
echo "<select>";

for ($i = date("Y"); $i >= date("Y")-100; $i-- ) {

    echo '<option value = "' . $i . '"> ' . $i . '</option>' ;
}
