<?php
class Jogador{
	public $nome,$camisa,$salario,$clube;
	public function __construct($nome,$camisa,$salario,$clube){
	$this->nome = $nome;
	$this->camisa = $camisa;
	$this->salario = $salario;
	$this->clube = $clube;
	}
	public function getNome(){
		return $this->nome;
		}
		
		public function getCamisa(){
		return $this->camisa;
		}
		
	public function aumentarSalario($valor){
		$this->salario = (($valor*100)/$this->salario);
	}
	}

class Clube{
	public $nome,$jogadores;
	public function __construct($nome){
	$this->nome = $nome;
	$this->jogadores = array();
	}
	
	public function contratar(Jogador $j){
		$this->jogadores[] = $j;
	}
	
}
?>