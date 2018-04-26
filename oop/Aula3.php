<?php

class Aluno{
	public $nome, $nmat, $materia;
	
	public function __construct($nome, $nmat){
		$this->nome = $nome;
		$this->nmat = $nmat;
	}
	
	//matricular
	//$m eh um objeto, logo, vc pode
	//modificar seus atributos e chamar
	//seus metodos.
	public function matricular(Materia $m){
		$this->materia = $m;
	}
	
	//O objeto materia eh formado dentro do
	//matricular2 e nao no teste fora das classes.
	public function matricular2($nome, $prof){
		$this->materia = new Materia($nome, $prof);
	}
	
	//NOME DO ALUNO, NUMERO DE MATRICULA
	//NOME DA MATERIA E O DO PROFESSOR
	public function mostrar(){
		echo "Nome Aluno : $this->nome \n";
		echo "N Mat : $this->nmat \n";
		//Chama o mostrar da classe materia
		//Sei que $this->materia eh uma instancia
		//da classe Materia
		$this->materia->mostrar();
	}
	
}

class Materia{
	public $nome, $prof;
	
	public function __construct($nome, $prof){
		$this->nome = $nome;
		$this->prof = $prof;
	}
	
	public function mostrar(){
		echo "Nome : $this->nome \n";
		echo "Prof : $this->prof \n";
	}
	
}

$a1 = new Aluno("Joao","98402842042");
$alg = new Materia("Algotimos","Chiara");
$a1->matricular($alg);
$a1->mostrar();

$a2 = new Aluno("Pedro","029022404");
$a2->matricular2("PHP", "Eu");
$a2->mostrar();





