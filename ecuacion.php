<?php
	class Ecuacion {	 
		public $M, $M2;
		public function __construct($x1, $y1, $x2, $y2){
			$this->M = ($y2 - $y1)/($x2 - $x1);//pendiente de la recta del segmento AC
			$this->Ma = (-1)/$this->M;
		}
	}
?>