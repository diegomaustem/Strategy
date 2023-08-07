<?php 

class CalculadoraDeJuros
{
    private $calculadorDeJuros;

    public function __construct(CalculaJurosInterface $calculadorDeJuros) 
    {
        $this->calculadorDeJuros = $calculadorDeJuros;
    }

    public function calculaJuros(Pedido $pedido) {
        return $this->calculadorDeJuros->getTaxaDeJuros($pedido);
    }
}