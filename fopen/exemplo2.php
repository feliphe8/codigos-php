<?php
require_once("config.php");
// CRIANDO ARQUIVO CSV - PUXANDO INFORMAÇÕES DO BANCO
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
//print_r($usuarios);

$headers = array();
foreach ($usuarios[0] as $key => $value) {
  array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");
fwrite($file, implode(",", $headers). "\r\n");
//echo implode(",", $headers); // COLOCA UM SEPARADOR, NO CASO A ,

foreach ($usuarios as $row) { // LINHAS
  $data = array();
  foreach ($row as $key => $value) { // CAMPOS
    array_push($data, $value);
  }
  fwrite($file, implode(",", $data). "\r\n");
}

fclose($file);

 ?>
