<?php
	class Ecuacion2 {//ecuacion de la linea l1
        public $a, $b, $c;
		public function __construct($Bx1, $By1, $m){
                  //y-y1=m(x-x1)
                  $this->a = $m * -1;
                  $this->b = 1;
                  $this->c = ($this->a * ($Bx1))+$By1;
		}
	}
?>