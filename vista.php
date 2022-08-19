<?php
	// Vista.php
	class Vista {
		public $ancho, $alto;
		public function __construct($an, $al){
			$this->ancho = $an;
			$this->alto = $al;
		}
		public function dibujar($modelo, $e){
			$img = imagecreate($this->ancho, $this->alto);
			$blanco = imagecolorallocate($img, 255, 255, 255);
			$negro = imagecolorallocate($img, 0, 0, 0);
			$verded = imagecolorallocate($img, 196, 237, 220);
			$azul = imagecolorallocate($img, 0, 0, 255);
			imagefilledrectangle($img, 0, 0, 400, 400, $blanco);
			$um = 40;
			$num_lin_hor = $this->alto / $um;
			$num_lin_ver = $this->ancho / $um;
			for($i=1; $i<=$num_lin_hor; $i++)
                imageline($img, 0, $um*$i, $this->ancho, $um*$i, $verded);
			for($i=1; $i<=$num_lin_ver; $i++)
                imageline($img, $um*$i, 0, $um*$i, $this->alto, $verded);
			$ap = array(
				$modelo->punto1->x, $modelo->punto1->y,
				$modelo->punto2->x, $modelo->punto2->y,
				$modelo->punto3->x, $modelo->punto3->y
			);
			imagepolygon($img, $ap, 3, $negro);
			imagestring($img, 10, $modelo->pmLado1->x, $modelo->pmLado1->y, "L1=" . round($modelo->lado1,2), $negro);
			imagestring($img, 10, $modelo->pmLado2->x, $modelo->pmLado2->y, "L2=" . round($modelo->lado2,2), $negro);
			imagestring($img, 10, $modelo->pmLado3->x, $modelo->pmLado3->y, "L3=" . round($modelo->lado3,2), $negro);
			imagestring($img, 10, ($modelo->punto1->x+round($e->X,2))/2, ($modelo->punto1->y+round($e->Y,2))/2, "L3=" . round($modelo->lado3,2), $negro);
            imagestring($img, 10, 10, 10, "P ALTURA = (". round($e->X,2) .", ". round($e->Y,2) .")", $negro);
			imageline($img, $modelo->punto1->x, $modelo->punto1->y, $e->X,$e->Y, $azul);
			imagepng($img);
			imagedestroy($img);
		}
	}
?>