<?php
//PASSAGEM PAR�METROS

class Pokemon{

	public $nome, $hp;
	
	public function __construct($nome, $hp){
		$this->nome = $nome;
		$this->hp = $hp;
	}
	//SE O POKEMON ESTIVER MORTO RETORNA TRUE
	//CASO CONTRARIO RETORNA FALSE
	public function isMorto(){
		if($this->hp <= 0){
			return true;
		}else
			return false;
	}
	
	//Pokemon representado pelo this
	//Pokemon representado pelo p
	//Pokemon this tira 10hp de p
	//Para esse dano ocorrer ambos
	//precisam estar vivos
	
	//EH UMA DICA PARA O INTERPRETADOR DO PHP
	//RECEBER APENAS POKEMONS.
	public function atacar(Pokemon $p){
		if($this->isMorto() || $p->isMorto())
			echo "Alguem morreu\n";
		else 
			$p->hp = $p->hp - 10; 
	}
	
	public function info(){
		echo $this->nome . ": " . $this->hp . "\n";
	}
}

$p1 = new Pokemon("Charmander",30);
$x = 5;
$p1->atacar($x);
//$p2 = new Pokemon("Squirtle",30);
/** $p1->atacar($p2);
$p2->atacar($p1);
$p1->atacar($p2);
$p2->atacar($p1);
$p2->atacar($p1);
$p2->atacar($p1);
$p1->info();
$p2->info();
**/


