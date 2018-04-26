<?php
   //SUPERCLASSE
   class Investimento {
       public $valor;
       
       public function __construct($valor){
           $this->valor = $valor;
       }
       
       public function info(){
           echo "Valor investido: $this->valor \n";
       }
   }
   
   //SUBCLASSES
   //Poupanca EH UM Investimento
   class Poupanca extends Investimento{
       //valor eh ganho via heranca
       //Ha um construtor em Investimento
       //portanto, opcionalmente, fazemos
       //um construtor na subclasse.
       public function __construct($valor){
           //super(valor);
           //chama o construtor da superclasse
           parent::__construct($valor);
       }
       //COMO Poupanca eh subclasse de Investimento
       //posso usar o atributo valor.
       public function renderPoupanca(){
           $this->valor = $this->valor*1.006;
       }
   }
   
   class RendaFixa extends Investimento{
       public function __construct($valor){
           parent::__construct($valor);
       }
       
       public function renderRendaFixa(){
           $this->valor = $this->valor*1.01;
       }
       
   }
   
   $r = new RendaFixa(10000);
   //O info() eh acessivel gracas a heranca
   $r->info();
   $r->renderRendaFixa();
   $r->info();
   
   $p = new Poupanca(1000);
   $p->info();
   $p->renderPoupanca();
   $p->info();
   
?>