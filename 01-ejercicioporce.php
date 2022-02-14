<?php
define ("valorUni", 43000);
define ("canproducto", 15);
$valorSin = valorUni * canproducto;
$valorCon = valorUni * canproducto *0.19;
$valorTotal= $valorSin + $valorCon; 
echo "el valor sin iva es: ".$valorSin."<br>";
echo "el valor iva es: ".$valorCon. "<br>";
echo "el valor total con iva es: ".$valorTotal. "<br>";