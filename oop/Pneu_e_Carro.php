<?php
   class Pneu{
       public $durabilidade;
       public function __construct($durabilidade){
           $this->durabilidade = $durabilidade;
       }
       
       public function gastar(){
           $this->durabilidade -= 3;
       }
       
       public function retificar($val){
           $this->durabilidade += $val;
       }
       
       public function checaFuro(){
           if($this->durabilidade >0){
               return true;
           }
               return false;
       }
       
   }
   
   class Carro{
       public $p1,$p2,$p3,$p4;
        public function __construct(Pneu $p1,$p2,$p3,$p4){
            $this->p1 = $p1;
            $this->p2 = $p2;
            $this->p3 = $p3;
            $this->p4 = $p4;
        }
        
        public function acelerar(){
            echo "Acelerou"."\n";
            if($this->p1->checaFuro() && $this->p2->checaFuro() && 
            $this->p3->checaFuro() && $this->p4->checaFuro()){
                $this->p1->gastar();
                $this->p2->gastar();
                $this->p3->gastar();
                $this->p4->gastar();
            }
        }
        
        public function frear(){
            echo "Freou"."\n";
            if($this->p1->checaFuro() && $this->p2->checaFuro() && 
            $this->p3->checaFuro() && $this->p4->checaFuro()){
                $this->p1->gastar();
                $this->p2->gastar();
                $this->p3->gastar();
                $this->p4->gastar();
                $this->p1->gastar();
                $this->p2->gastar();
                $this->p3->gastar();
                $this->p4->gastar();
            }
        }
        
        public function revisao(){
            echo $this->p1->durabilidade."\n";
            echo $this->p2->durabilidade."\n";
            echo $this->p3->durabilidade."\n";
            echo $this->p4->durabilidade."\n";
        }
   }
   
   $carro = new Carro(new Pneu(20),new Pneu(20),new Pneu(20),new Pneu(20));
   $carro->acelerar();
   $carro->frear();
   $carro->revisao();
?>
