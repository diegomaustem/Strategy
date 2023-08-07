<?php 

require_once('CalculaJurosInterface.php');

class Nubank implements CalculaJurosInterface
{
    public function getTaxaDeJuros(Pedido $pedido)
    {
        return 'Taxa de juros do Nubank';
    } 
}