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
            case 'Pequena':
                $precoBase = 20;
                break;
            case 'Media':
                $precoBase = 30;
                break;
            case 'Grande':
                $precoBase = 50;
                break;
        }
        $precoSabor = 0;
        switch ($this->sabor) {
            case 'bacon':
                $precoSabor = 10;
                break;
            case 'quatroqueijos':
                $precoSabor = 15;
                break;
            case 'tadicional':
                $precoSabor = 20;
                break;
        }
        $precoTotal = $precoBase + $precoSabor;
        $this->setValor($precoTotal); // Definindo o valor calculado como o valor do item do pedido
        return $precoTotal;
    }
}
