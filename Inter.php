<?php 

require_once('CalculaJurosInterface.php');

class Inter implements CalculaJurosInterface 
{
    public function getTaxaDeJuros(Pedido $pedido)
    {
        return 'Taxa de juros do Inter';
    }
}