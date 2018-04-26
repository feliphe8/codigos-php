<?php

$conn = new mysqli("localhost", "root", "08051995", "dbphp7");
if ($conn->connect_error) {
  echo "Error: ". $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");
$stmt->bind_param("ss",$login, $pass);// Espera o tipo de dado das ?. ss = string string
$login = "user"; // Precisa criar as variaveis pra passar no bind_param
$pass = "12345";
$stmt->execute();
$login = "root";
$pass = "!@#$";
$stmt->execute();
 ?>
