<?php
/* calculo2d.php
 * autor: Gustavo H. Puma Tejada
 */

//primero capturamos los valores de nuestra
//tabla de cajas de textos del formulario anterior
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];

//luego ponemos todos los valores en un arreglo 2d (matriz)
//para un procesamiento más fácil
$matriz = array(
    array($a,$b,$c),
    array($d,$e,$f)
);