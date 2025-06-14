<?php 
$temperatura_celsius = $_GET['a'];
$temperatura_final = (($temperatura_celsius * 9/5) + 32);
echo "A temperatura final será de:$temperatura_final";