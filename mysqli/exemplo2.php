<?php

$conn = new mysqli("localhost", "root", "08051995", "dbphp7");
if ($conn->connect_error) {
  echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");
$data = array();
while ($row = $result->fetch_assoc()){
  array_push($data, $row);// ADICIONA NOVO ITEM NO ARRAY DATA
  var_dump($row);
}

echo json_encode($data);

 ?>
