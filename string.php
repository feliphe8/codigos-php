<?php
/*$name = "feliphe simões";
echo strtoupper($name); //Converte tudo pra maisculo
echo strtolower($name);// Converte tudo pra minusculo
echo ucwords($name);// Converte as primeiras letras pra maisculo(captalize)
echo ucfirst($name);// Converte apenas a primeira letra da frase para maisculo*/

////////////////////////////////////////////////////////////////////////////////

/*$empresa = "Paçoca Corporation";
$empresa = str_replace("o", "0", $empresa);// Substitui os o por 0 na string empresa
echo $empresa;*/

//////////////////////////////////////////////////////////////
$frase = "A repetição é mãe da retenção";
$q = strpos($frase, "mãe");// Posição da palavra mãe na string $frase
var_dump($q);

$texto = substr($frase, 0, $q);// Retorna o texto da posição 0 até a posição q(17)
var_dump($texto);

$texto2 = substr($frase, $q + strlen("mãe"), strlen($frase));// Mostra o texto após a palavra mãe
