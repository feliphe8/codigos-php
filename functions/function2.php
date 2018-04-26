<?php
//Recursos do PHP 7
// Declaração de tipos escalares
/*function soma(int ...$valores){
  return array_sum($valores);
}
*/
//echo soma(2,2);
//Declarando o tipo de retorno
function soma(int ...$valores):string{
  return array_sum($valores);
}

echo var_dump(soma(2,2));
 ?>
