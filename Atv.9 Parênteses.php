<?php
$num1 = $_GET['a'];
$num2 = $_GET['b'];
$num3 = $_GET['c'];
 $resultado = ($num1+$num2)*$num3;
 $resultado2 = $num1 + ($num2*$num3);
 echo "o Resultado de ($num1+$num2)*$num3 é:$resultado";
 echo "<br/> o resultado de $num1 + ($num2*$num3) é: $resultado2";