<?php

class Documento {

  private $numero;

  public function getNumero(){
    return $this->numero;
  }

  public function setNumero($numero){
    $this->numero = $numero;
  }
}

class CPF extends Documento {
  public function validar():bool{
    $cpf = $this->getNumero();
    // Verifica se não está vazio
    if(empty($cpf)) {
       return false;
   }
   // Elimina possível mascara
   $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
   $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

   // Verifica se tem 11 digitos
   if (strlen($cpf) != 11) {
       echo "length";
       return false;
   }
   // Verifica se nenhuma das sequências inválidas abaixo foi digitada. Caso tenha sido digitado, retorna falso
   else if ($cpf == '00000000000' ||
       $cpf == '11111111111' ||
       $cpf == '22222222222' ||
       $cpf == '33333333333' ||
       $cpf == '44444444444' ||
       $cpf == '55555555555' ||
       $cpf == '66666666666' ||
       $cpf == '77777777777' ||
       $cpf == '88888888888' ||
       $cpf == '99999999999') {
       return false;

       //Calcula os digitos digitados para verificar se o CPF é válido
    } else {

       for ($t = 9; $t < 11; $t++) {

           for ($d = 0, $c = 0; $c < $t; $c++) {
               $d += $cpf{$c} * (($t + 1) - $c);
           }
           $d = ((10 * $d) % 11) % 10;
           if ($cpf{$c} != $d) {
               return false;
           }
       }

       return true;
   }
  }
}

$doc = new CPF();
$doc->setNumero("37907938848");
var_dump($doc->validar());
echo "<br>". $doc->getNumero();

 ?>
