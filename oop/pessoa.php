<?php
   //SUPECLASSE
   class Pessoa {
       public $nome;
       
       public function __construct($nome){
           $this->nome = $nome;
       }
       
       public function mostrar(){
           echo "Nome do cliente: $this->nome \n";
       }
   }
   //NESTE EXEMPLO A SUBCLASSE POSSUI UM ATRIBUTO CPF
   class PessoaFisica extends Pessoa {
       public $cpf;
       
       public function __construct($nome, $cpf){
           parent::__construct($nome);
           $this->cpf = $cpf;
       }
       
       public function mostrarCPF(){
           echo "Nro documento: $this->cpf";
       }
   }
   
   class PessoaJuridica extends Pessoa {
       public $cnpj;
       
       public function __construct($nome, $cnpj){
           parent::__construct($nome);
           $this->cnpj = $cnpj;
       }
       
       public function mostrarCNPJ(){
           echo "Nro documento: $this->cnpj";
       }
   }
   
   $p = new PessoaFisica("Joao","147.258.965-50");
   $p->mostrar();
   $p->mostrarCPF();
?>