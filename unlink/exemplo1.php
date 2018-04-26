<?php

$file = fopen("teste.txt","w+");

fclose($file);

unlink("teste.txt"); // REMOVE ARQUIVO
echo "Arquivo removido com sucesso";

 ?>
