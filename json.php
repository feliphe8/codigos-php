<?php
  $pessoas = array();
  array_push($pessoas, array(
    'nome' => 'Feliphe',
    'Idade' => 22
  ));

  array_push($pessoas, array(
    'nome' => 'Mariazinha',
    'Idade' => 24
  ));

  //echo json_encode($pessoas);

  $json = '
[{"nome":"Feliphe","Idade":22},{"nome":"Mariazinha","Idade":24}]';
$data = json_decode($json, true);
var_dump($data);
 ?>
