<?php

class Pessoa{

  public $nome;

  public function falar(){
    return "O meu nome é ". $this->nome;
  }

}

$person = new Pessoa();
$person->nome = "Nicolette Shea";
echo $person->falar();
 ?>
