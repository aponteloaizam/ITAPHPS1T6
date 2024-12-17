<?php declare(strict_types = 1);

include "programa.php";

$app1 = new Programa ("SAP", "Juan");
echo $app1->nombrar() . "\n";
echo $app1->encontrar() . "\n";
echo $app1->__toString();

?>