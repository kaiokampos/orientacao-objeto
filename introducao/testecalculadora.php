<?php include "classes/calculadora.class.php";

$calcular = new Calculadora();
$calcular->n1= 50;
$calcular->n2= 30;

echo $calcular->calcularSoma();
echo "<br/>";
echo $calcular->calcularMedia();
echo "<br/>";
echo $calcular->calcularMultiplicacao();
?>