<?php

$fileName = "logo.png";

$base64 = base64_encode(file_get_contents($fileName)); // LE O CONTEUDO DE UM ARQUIVO INTEIRO - RETORNA BINARIO - BASE64 CONVERTE PARA STRING BASE64
$fileinfo = new finfo(FILEINFO_MIME_TYPE); // CONSTANTE QUE VAI PEDIR O TIPO MIME DO ARQUIVO
$mimetype = $fileinfo->file($fileName);
$base64encode =  "data:".$mimetype.";base64,".$base64;

 ?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>
<img src="<?=$base64encode?>" alt="logo">
