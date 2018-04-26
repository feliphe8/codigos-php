<?php

function incluirClasses($nomeClasse){
  if(file_exists("$nomeClasse.php") === true){
    require_once("$nomeClasse.php");
  }
}

spl_autoload_register("incluirClasses");// Incluindo a classe DelRey
spl_autoload_register(function($nomeClasse){
  if(file_exists("Abstracts".DIRECTORY_SEPARATOR."$nomeClasse.php") === true){
    require_once("Abstracts".DIRECTORY_SEPARATOR."$nomeClasse.php");
  }
});// Incluindo a classe abstrata Automovel

spl_autoload_register(function($nomeClasse){
  if(file_exists("Interface".DIRECTORY_SEPARATOR."$nomeClasse.php") === true){
    require_once("Interface".DIRECTORY_SEPARATOR."$nomeClasse.php");
  }
});// Incluindo a interface Veiculo

$carro = new DelRey();
$carro->acelerar(80);

 ?>
