<?php
//Um quadrilatero possui um $lado e um construtor.
//Um quadrado usando o $lado ganho por heranca
// pode calcular area e perimetro
//O retangulo possui outro lado chamado $lado2 e 
//junto com o $lado do Quadrilatero eh possivel
// calcular tambem area e perimetro.
//Area e perimetros devem ser mostrados via echo
//OBS:Desenhe o diagrama de classes.

class Quadrilatero{
    public $lado;
    
    public function __construct($lado){
        $this->lado = $lado;
    }
    
}

class Quadrado extends Quadrilatero{
    public function __construct($lado){
        parent::__construct($lado);
    }
    
    public function calcArea(){
        $a = $this->lado*$this->lado;
        echo "Area: $a";
    }
    public function calcPerimetro(){
        $p = $this->lado*4;    
        echo "Perimetro: $p";
    }
}

class Retangulo extends Quadrilatero{
    public $lado2;
    public function __construct($lado,$lado2){
        parent::__construct($lado);
        $this->lado2 = $lado2;
    }
    
   public function calcArea(){
        $a = $this->lado*$this->lado2;
        echo "Area: $a";
    }
    public function calcPerimetro(){
        $p = 2*($this->lado2 + $this->lado);    
        echo "Perimetro: $p";
    }
}

$quadrado = new Quadrado(2);
$quadrado->calcArea();
$quadrado->calcPerimetro();

$retangulo = new Retangulo(2,4);
$retangulo->calcArea();
$retangulo->calcPerimetro();
?>