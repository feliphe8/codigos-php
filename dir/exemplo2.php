<?php

$images = scandir("images");// Retorna Array
$data = array();
//var_dump($images);
foreach ($images as $img) {
  if (!in_array($img, array(".", ".."))){// Faz uma busca dentro de um array. Parametros: oq vc ta procurando , as opções

    $fileName = "images". DIRECTORY_SEPARATOR . $img;

    $info = pathinfo($fileName); // INFORMAÇÕES DO ARQUIVO

    $info["size"] = filesize($fileName); // TAMANHO DO ARQUIVO
    $info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));// MOSTRANDO A DATA DE MODIFICAÇÃO DO ARQUIVO
    $info["url"] = "http://localhost/phpseven/dir/". str_replace("\\", "/", $fileName); // Colocando a url da imagem, substituindo a \ q o DIRECTORY_SEPARATOR coloca

    array_push($data, $info);
    //var_dump($info);
  }

}

echo json_encode($data);

 ?>
