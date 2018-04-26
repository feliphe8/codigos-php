<?php

// PROCESSO EM QUE SE TUDO DER CERTO, ELE EXECUTA, CASO ALGUMA ETAPA DÊ ERRADO, ELE CANCELA TUDO
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "08051995");
$conn->beginTransaction();
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;
$stmt->execute(array($id));
//$conn->rollback();
$conn->commit();// Confirmar alterações
echo "Delete";

 ?>
