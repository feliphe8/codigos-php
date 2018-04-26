<?php
# Função Anônima
function test($callback){
  // Processo Lento
  $callback();
}

test(function(){
  echo "Terminou!";
});

echo "<br>";

$function = function($a){
  var_dump($a);
};

$function("Alo");
 ?>
