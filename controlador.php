<?php
	// Controlador.php
	class Controlador {
		public function exhibir($modelo, $vista, $e){
			$vista->dibujar($modelo, $e);
		}
	}
?>