<?php
class Produto{
	public $preco , $qtde;
	
	public function __construct($preco,$qtde){
	$this->preco = $preco;
	$this->qtde = $qtde;
	}
	
	
}

class Eletrodomestico extends Produto{
	
	public function __construct($preco,$qtde){
		parent::__construct($preco,$qtde);
	}
	
	public function vender($qtdeCompra){
		if($this->qtde > $qtdeCompra){
				$this->qtde -= $qtdeCompra;
				echo "Vendido";
				}else{echo "Sem estoque";}
	}
	
	public function imposto($valor){
		$this->preco = (($valor*100)/$this->preco);
		}
		
	public function promocao(){
		$this->preco = ((20 * 100)/$this->preco);
	}
}

class Roupas extends Produto{
	public function __construct($preco,$qtde){
		parent::__construct($preco,$qtde);
	}
	public function vender($qtdeCompra){
		if($this->qtde > $qtdeCompra){
				$this->qtde -= $qtdeCompra;
				}else{echo "Sem estoque";}
	}
	
	public function promocao(){
		$this->preco = ((15 * 100)/$this->preco);
	}
}
class Moveis extends Produto{
	public function __construct($preco,$qtde){
		parent::__construct($preco,$qtde);
	}
	public function vender($qtdeCompra){
		if($this->qtde > $qtdeCompra){
				$this->qtde -= $qtdeCompra;
				echo "Vendido";
				}else{echo "Sem estoque";}
	}

	public function promocao(){
		$this->preco = ((12.5 * 100)/$this->preco);
	}
}

$Eletro = new Eletrodomestico(500,10);
$Camisa = new Roupas(50,20);
$Mesa = new Moveis(200,5);
$Eletro->vender(1);

?>