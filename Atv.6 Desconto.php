<?php
$valor_original = $_GET['a'];
$percentual_desconto = $_GET['b'];

$valor_do_desconto = ($valor_original * $percentual_desconto) / 100;
 $valor_final = ($valor_original - $valor_do_desconto);

 echo "O valor original é: $valor_original";
 echo "<br/>O desconto é : $percentual_desconto";
 echo "<br/>O valor do desconto: $valor_do_desconto";
 echo "<br/>E o Valor Final: $valor_final";
 ?>