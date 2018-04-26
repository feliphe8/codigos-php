<?php

class Pessoa {
  public $nome = "Rasmus Lerdorf";
  protected $idade = 48;
  private $senha = "123456";

  public function verDados(){
    echo $this->nome. "<br>";
    echo $this->idade. "<br>";
    echo $this->senha. "<br>";
  }
}

//$person = new Pessoa();

//echo $person->nome. "<br>";
//$person->verDados();

class Programador extends Pessoa {

  public function verDados(){

    echo get_class($this) . "<br>";// Mostrar nome da classe
    echo $this->nome. "<br>";
    echo $this->idade. "<br>";
    echo $this->senha. "<br>";
  }


}

$programador = new Programador();
$programador->verDados();

 ?>
