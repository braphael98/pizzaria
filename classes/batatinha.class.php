<?php
class Batatinha_class extends ItemDoPedido_class
{
    private $tamanho;
    private $sabor;
    private $tipo;
    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }
    public function getTamanho()
    {
        return $this->tamanho;
    }
    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
    }
    public function getSabor()
    {
        return $this->sabor;
    }
    public function calcularPrecoBatata()
    {
        $precoBase = 0;
        switch ($this->tamanho) {
            case 'Pequena':
                $precoBase = 10;
                break;
            case 'Média':
                $precoBase = 15;
                break;
            case 'Grande':
                $precoBase = 25;
                break;
        }
        $precoSabor = 0;
        switch ($this->sabor) {
            case 'Bacon':
                $precoSabor = 5;
                break;
            case 'Quatro Queijos':
                $precoSabor = 5;
                break;
            case 'Tradicional':
                $precoSabor = 10;
                break;
        }
        $precoTotal = $precoBase + $precoSabor;
        $this->setValor($precoTotal); // Definindo o valor calculado como o valor do item do pedido
        return $precoTotal;
    }
}
