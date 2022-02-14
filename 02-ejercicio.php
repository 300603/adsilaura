<?php
define ("nota1", 5);
define ("nota2", 2);
define ("nota3", 1);
define ("nota4", 2);
$porce1 = nota1 * 0.15;
$porce2 = nota2 * 0.20;
$porce3 = nota3 * 0.25;
$porce4 = nota4 * 0.40;
$porTotal= $porce1+$porce2+$porce3+$porce4;

echo "El nombre del estudiante es pepito perez y en su materia de ingles su nota final es: " .$porTotal;