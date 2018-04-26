<?php

$file = fopen("log.txt", "a+"); // ESPERA 2 PARAMETROS: CAMINHO DO ARQUIVO E O QUE VOCE VAI FAZER COM O ARQUIVO

fwrite($file, date("Y-m-d H:i:s"). "\r\n"); // ESCREVE NO ARQUIVO A DATA

fclose($file);

echo "Arquivo criado com sucesso";
 ?>
