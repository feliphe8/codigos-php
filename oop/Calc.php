<?php

class Calculadora{
	//DISPLAY DA CALCULADORA
	public $res;
	
	public function __construct(){
		$this->res = 0;
	}
	//$a e $b nao sao atributos
	//portanto, nao ha $this.
	public function somar($a, $b){
		$this->res = $a + $b;
	}
	
	public function mult($a, $b){
		$this->res = $a * $b;
	}
	
	public function mostrar(){
		echo $this->res;
	}
}

$x = $_POST['n1'];
$y = $_POST['n2'];

$calc = new Calculadora();
$calc->mult($x,$y);
$calc->mostrar();

