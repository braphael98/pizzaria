<?php
require_once 'itemDoPedido.class.php';
class Pizza_class extends ItemDoPedido_class
{
    private $tamanho;
    private $sabor;
    private $borda;

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

    public function setBorda($borda)
    {
        $this->borda = $borda;
    }

    public function getBorda()
    {
        return $this->borda;
    }

    public function calcularPrecoPizza()
    {
        $precoBase = 0;
        switch ($this->tamanho) {
            case 'Pequena':
                $precoBase = 20;
                break;
            case 'Média':
                $precoBase = 25;
                break;
            case 'Grande':
                $precoBase = 30;
                break;
            default:
            $precoBase = 0;    
        }
    
        $precoSabor = 0;
        switch ($this->sabor) {
            case 'Calabresa':
                $precoSabor = 5;
                break;
            case 'Quatro Queijos':
                $precoSabor = 5;
                break;
            case 'Strogonoff':
                $precoSabor = 10;
                break;
            case 'Portuguesa':
                $precoSabor = 11;
                break;
        }
        $precoBorda = 0;
        switch ($this->borda) {
            case 'Catupiry':
                $precoBorda = 5;
                break;
            case 'Cheddar':
                $precoBorda = 4;
                break;
            default:
                $precoBorda = 0;
        }
        $precoTotal = $precoBase + $precoSabor + $precoBorda;
        $this->setValor($precoTotal); // Definindo o valor calculado como o valor do item do pedido
        return $precoTotal;
    }
}

