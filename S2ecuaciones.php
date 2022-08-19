<?php
	class Ecu {	 
		public $X, $Y;
		public $a, $b, $c, $d, $e, $f;
		public function __construct($a, $b, $c, $d, $e, $f){
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
			$this->d = $d;
			$this->e = $e;
			$this->f = $f;
			$this->Y = ($f - (($d*$c)/$a))/(((-$d*$b)/$a)+$e);
			$this->X = ($c-($b*$this->Y))/$a;
		}
	}
?>