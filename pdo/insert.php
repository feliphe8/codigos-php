<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "08051995");
$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "feliphe";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login); // Ligando a variavel login e senha com os parametros passados no INSERT
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();


 ?>
