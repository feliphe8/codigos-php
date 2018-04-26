<?php
class Aluno{
	public $nome;
	public function __construct($nome){
		$this->nome = $nome;
	}
	
	public function getInfo(){
		return $this->nome;
	}
}

class Materia{
	public $nome, $alunos;
	
	public function __construct($nome){
		$this->nome = $nome;
		$this->alunos = array();
	}
	//listarAlunos
	public function info(){
		$aux = "<ul><li>" . $this->nome . ": </li>";
		foreach ($this->alunos as $aluno){
			$aux = $aux . "<li>" . $aluno->getInfo() . "</li>";
		}
		$aux = $aux . "</ul>";
		return $aux;
	}
	
	public function infoJSON(){
		echo json_encode($this);
	}
	
	//matricular
	public function adicionar(Aluno $a){
		$this->alunos[] = $a;
	}
}

class ViewAlunos{
	
	public function criarTeste(){
		$m = new Materia("IDS-001");
		$m->adicionar(new Aluno("Edgar"));
		$m->adicionar(new Aluno("Ricardo"));
		$m->adicionar(new Aluno("Feliphe"));
		$m->adicionar(new Aluno("Priscila"));
		return $m;
	}
	
	public function renderizar(){
		$m = $this->criarTeste();
		//listarAlunos
		$data = $m->info();
		require_once 'index.php';
	}
	
	public function renderJ(){
		$m = $this->criarTeste();
		$m->infoJSON();
	}
		
}

$v = new ViewAlunos();
//$v->renderizar();
$v->renderJ();