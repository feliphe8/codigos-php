<?php
for ($i = 0; $i < 1000 ; $i+=5){
  // Não mostra os numeros entre 200 e 800
  if($i > 200 && $i < 800) continue;
  //Para o for quando o i for igual a 900
  if($i === 900) break;
  echo $i . "<br>";
}
