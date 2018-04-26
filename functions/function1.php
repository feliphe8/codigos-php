<?php
  function test(){
    $arguments = func_get_args();
    return $arguments;
  }

  $a = 10;

  //Passagem de parâmetro por referência(o que alterar dentro da função vai alterar na variável global que ta fora da função)
  function testTwo(&$b){
    $b += 50;
    return $b;
  }

  //var_dump(test("Fuck you", 10));

  $pessoa = array(
    'nome' => 'Feliphe',
    'idade' => 22
  );
//Alterando o valor da idade do array dentro do foreach, passando a referência de idade
  foreach ($pessoa as &$value) {
    //gettype retorna o tipo da variável
    if(gettype($value) === 'integer') $value += 10;

    echo $value . '<br>';
  }
 ?>
