<?php
	header("Content-type: image/png");
	require_once("Punto.php");
	require_once("Modelo.php");
	require_once("Vista.php");
	require_once("Controlador.php");
	require_once("S2ecuaciones.php");
	require_once("ecuacion.php");
	require_once("ecuacion2.php");
	$ancho = 1500;
	$alto = 800;
	$p1x = 300; $p1y = 100;//punta arriba B
	$p2x= 10; $p2y= 400;//punta izquierda A
	$p3x = 1200; $p3y = 450;//punta derecha C

    //$p1x = 200; $p1y = 100;
	//$p2x= 100; $p2y= 600;
	//$p3x = 1000; $p3y = 400;

	$e = new Ecuacion($p2x, $p2y, $p3x ,$p3y);
	$eL1 = new Ecuacion2($p1x, $p1y, $e->Ma);
	$eL2 = new Ecuacion2($p2x, $p2y, $e->M);
	$e3 = new Ecu($eL1->a, 1, $eL1->c, $eL2->a, 1, $eL2->c);
	$p1 = new Punto($p1x, $p1y);
	$p2 = new Punto($p2x, $p2y);
	$p3 = new Punto($p3x, $p3y);
	$v = new Vista($ancho, $alto);
	$m = new Modelo($p1, $p2, $p3);
	$c = new Controlador();
	$c->exhibir($m, $v, $e3);
?>