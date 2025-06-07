<?php
$salario_base = $_GET['a'];
$percentual_aumento = $_GET['b'];

$valor_do_aumento = ($salario_base * $percentual_aumento) / 100;
 $novo_salario = ($valor_do_aumento + $salario_base);

 echo "O salario base é: $salario_base ";
 echo "<br/>O Percentual é : $percentual_aumento";
 echo "<br/>O valor do aumento: $valor_do_aumento ";
 echo "<br/>E o Novo Salario: $novo_salario";
 ?>