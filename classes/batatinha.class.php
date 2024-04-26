<?php
class Batatinha_class extends ItemDoPedido_class
{
    private $tamanho;
    private $sabor;
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
            case 'pequena':
                $precoBase = 10;
                break;
            case 'media':
                $precoBase = 15;
                break;
            case 'grande':
                $precoBase = 25;
                break;
        }
        $precoSabor = 0;
        switch ($this->sabor) {
            case 'bacon':
                $precoSabor = 5;
                break;
            case 'quatroqueijos':
                $precoSabor = 5;
                break;
            case 'tadicional':
                $precoSabor = 10;
                break;
        }
        $precoTotal = $precoBase + $precoSabor;
        $this->setValor($precoTotal); // Definindo o valor calculado como o valor do item do pedido
        return $precoTotal;
    }
}
