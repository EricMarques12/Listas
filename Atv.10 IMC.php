<?php
$peso = (float) $_GET['a']; 
$altura = (float) $_GET['b']; 

$imc = $peso / ($altura * $altura);

echo"Seu IMC é:$imc";
?>