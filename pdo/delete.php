<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "08051995");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);
$stmt->execute();


 ?>
