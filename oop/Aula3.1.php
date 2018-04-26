<?php

class Bola{
	public $nome, $valor;
	
	public function __construct($nome, $valor){
		$this->nome = $nome;
		$this->valor = $valor;
	}
}

class Crianca{
	public $nome, $mesada, $bola;
	
	public function __construct($nome){
		$this->nome = $nome;
	}
	
	public function ganhar($valor){
		$this->mesada += $valor;
	}
	
	//comprar 
	//Refazer o comprar usando
	//a instancia da Bola dentro
	//deste metodo
	public function comprar(Bola $b){
		if($this->mesada >= $b->valor){
			$this->bola = $b;
			$this->mesada -= $b->valor;
		}else{
			echo "Dinheiro insuficiente";
		}
	}
	
	public function chutar(){
		$b = $this->bola;
		echo "$this->nome -> chutou " . "$b->nome";
	}
	
}

$c1 = new Crianca("Erika");
$c1->ganhar(30.78);
$c1->comprar(new Bola("Nike",29.99));
$c1->chutar();