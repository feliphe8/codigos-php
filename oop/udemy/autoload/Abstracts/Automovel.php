<?php

abstract class Automovel implements Veiculo {

  public function acelerar($velocidade){
    echo "O veículo acelerou até ". $velocidade. "km/h";
  }

  public function frear($velocidade){
    echo "O veículo freou quando atingiu a velocidade de ". $velocidade. "km/h";
  }

  public function trocarMarcha($marcha){
    echo "O veículo engatou a marcha ". $marcha;
  }
}


 ?>
