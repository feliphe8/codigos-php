<?php
# Funções date() e time()
echo date("d/m/Y H:i:s");

echo "<br>";

echo time(); // timestamp: Quantidade de segundos desde 1 de janeiro de 1970

////////////////////////////////////////////////////////////

echo "<br>";

//$ts = strtotime("2001-09-11"); // timestamp da data passada por parâmetro
//$ts = strtotime("+1 day");
$ts = strtotime("+1 week");
echo date("l, d/m/y", $ts );
 ?>
