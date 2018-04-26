<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "08051995");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC); //TRAZ SOH O ARRAY ASSOCIATIVO

foreach ($result as $row) {
  foreach ($row as $coluna => $value) {
    echo "<strong>" .$coluna. ":</strong>".$value."<br>";
  }
  echo "================================================ <br>";
}
var_dump($result);

 ?>
