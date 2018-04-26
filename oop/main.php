<?php
   class Aluno{
       public $nome;
       public function __construct($nome){
           $this->nome = $nome;
       }
       
       public function getNome(){
           return $this->nome;
       }
   }
   
   class Materia{
       //nome -> string
       //alunos -> array de Aluno
       public $nome, $alunos;
       
       public function __construct($nome){
           $this->nome = $nome;
           $this->alunos = array();
       }
       
       public function matricular(Aluno $a){
           //adiciona um aluno ao vetor de alunos
           $this->alunos[] = $a;
           
       }
       //nao ha this pois aluno é local
       public function listarAluno(){
           echo "Disciplina: $this->nome"."\n";
           foreach($this->alunos as $aluno){
                echo $aluno->getNome()."\n"; 
           }
       }
       
   }
   
   $m = new Materia("IDS-001");
   $m->matricular(new Aluno("Edgar"));
   $m->matricular(new Aluno("Ricardo"));
   $m->listarAluno();
?>

