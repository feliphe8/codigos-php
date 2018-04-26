<?php

abstract class Animal {

  public function falar(){
    return "Som";
  }

  public function mover(){

    return "Mover-se";
  }


}

class Cachorro extends Animal{

  public function falar(){
    return "Latir";
  }
}

class Gato extends Animal{

  public function falar(){
    return "Miar";
  }
}

class Passaro extends Animal{

  public function mover(){
    return "Voar e ". parent::mover();// Busca o comportamento da classe mãe
  }
}

$dog = new Cachorro();
echo $dog->falar()."<br>";
$cat = new Gato();
echo $cat->falar(). "<br>";

$bird = new Passaro();
echo $bird->mover();

 ?>
