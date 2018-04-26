<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "08051995");
$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "feliphe";
$password = "1234567890";
$id = 2;

$stmt->bindParam(":LOGIN", $login); // Ligando a variavel login e senha com os parametros passados no INSERT
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();


 ?>
