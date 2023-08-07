<?php 

interface CalculaJurosInterface 
{
    public function getTaxaDeJuros(Pedido $pedido);
}