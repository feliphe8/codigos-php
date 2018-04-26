<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("123456");

$cad->registrarVenda();
// O ECHO CONSEGUE MOSTRAR O OBJETO POR CAUSA DO METODO MAGICO toString() e a função json_encode

 ?>
