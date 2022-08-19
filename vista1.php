<?php
	require_once("Punto.php");
	require_once("Modelo.php");
	require_once("Vista.php");
	require_once("Controlador.php");
	require_once("S2ecuaciones.php");
	require_once("ecuacion.php");
	require_once("ecuacion2.php");

	$p1x = 300; $p1y = 100;
	$p2x= 10; $p2y= 400;
	$p3x = 1200; $p3y = 450;

    $p1x = 300; $p1y = 100;
	$p2x= 100; $p2y= 600;
	$p3x = 1000; $p3y = 400;
    
    $p1 = new Punto($p1x, $p1y);//punta arriba
    $p2 = new Punto($p2x, $p2y);//punta izquierda
    $p3 = new Punto($p3x, $p3y);//punta derecha
    echo "p1($p1x, $p1y)";
    echo "<br/>";
    echo "p2($p2x, $p2y)";
    echo "<br/>";
	$e = new Ecuacion($p1x, $p1y, $p2x ,$p2y);
    echo "M: ".round($e->M,1);
    echo "<br/>";
    echo "Ma: ".round($e->Ma,1);
    echo "<br/>";
	$eL1 = new Ecuacion2($p1x, $p1y, $e->Ma);
    echo "a: ".round($eL1->a,1);
    echo "<br/>";
    echo "b: ".round($eL1->b,1);
    echo "<br/>";
    echo "c: ".round($eL1->c,1);
    echo "<br/>";
	$eL2 = new Ecuacion2($p3x, $p3y, $e->M);
    echo "d: ".round($eL2->a,1);
    echo "<br/>";
    echo "e: ".round($eL2->b,1);
    echo "<br/>";
    echo "f: ".round($eL2->c,1);
	$e3 = new Ecu($eL1->a, 1, $eL1->c, $eL2->a, 1, $eL2->c);
    echo "<br/>";
    echo "(".round($e3->X,2)." , ".round($e3->Y,2).")";
?>