<?php 

require_once('Pedido.php');
require_once('CalculadoraDeJuros.php');
require_once('Inter.php');
require_once('Nubank.php');

$pedido     = new Pedido(10);
$calculadora = new CalculadoraDeJuros(new Nubank());

echo $calculadora->calculaJuros($pedido);



