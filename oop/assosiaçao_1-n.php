<?php
   class Aluno{
       public $nome,$nota;
       public function __construct($nome,$nota){
           $this->nome = $nome;
           $this->nota = $nota;
       }
       
       public function getNome(){
           return $this->nome;
       }
       public function getNota(){
           return $this->nota;
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
                echo $aluno->getNome();
                echo " Nota:".$aluno->getNota()."\n"; 
           }
       }
       
   }
   
   $m = new Materia("IDS-001");
   $m->matricular(new Aluno("Edgar",10));
   $m->matricular(new Aluno("Ricardo",10));
   $m->matricular(new Aluno("Bazuca",10));
   $m->matricular(new Aluno("Alfafa",10));
   $m->matricular(new Aluno("Alface",10));
   $m->matricular(new Aluno("Tomate",10));
   $m->matricular(new Aluno("Batata",10));
   $m->matricular(new Aluno("Zé Gotinha",10));
   $m->listarAluno();
?>

