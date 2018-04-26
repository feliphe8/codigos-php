<?php
class Pagina{
	
	public function verificaNumero($x){
	if($x > 4){
	header('Location: erro.php');}
	if($x == 1){
	header('Location: page01.php');}
	if($x == 2){
	header('Location: page02.php');}
	if($x == 3){
	header('Location: page03.php');}
	if($x == 4){
	header('Location: page04.php');}
	}
	//require_once
}

$x = $_POST['n1'];
$p = new Pagina();
$p->verificaNumero($x);
?>