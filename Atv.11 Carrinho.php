<?php
$preco_produto1 = $_GET['a'];
$quantidade_produto1 = $_GET['b'];
$preco_produto2 = $_GET['c'];
$quantidade_produto2 = $_GET['d'];

$subtotal_produto1 = ($preco_produto1 * $quantidade_produto1);
$subtotal_produto2 = ($preco_produto2 * $quantidade_produto2);
$valor_total_carrinho = $subtotal_produto1 + $subtotal_produto2;

echo"O valor do seu carrinho é de: $valor_total_carrinho";