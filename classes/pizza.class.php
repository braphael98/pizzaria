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
            case 'pequena':
                $precoBase = 20;
                break;
            case 'media':
                $precoBase = 25;
                break;
            case 'grande':
                $precoBase = 30;
                break; 
            default:
            $precoBase = 0;    
        }
    
        $precoSabor = 0;
        switch ($this->sabor) {
            case 'calabresa':
                $precoSabor = 5;
                break;
            case 'quatroqueijos':
                $precoSabor = 5;
                break;
            case 'strogonoff':
                $precoSabor = 12;
                break;
            case 'portuguesa':
                $precoSabor = 11;
                break;
        }
        $precoBorda = 0;
        switch ($this->borda) {
            case 'catupiry':
                $precoBorda = 5;
                break;
            case 'cheddar':
                $precoBorda = 4;
                break;
            case 'semborda':
                $precoBorda = 0;    
            default:
                $precoBorda = 0;
        }
        $precoTotal = $precoBase + $precoSabor + $precoBorda;
        $this->setValor($precoTotal); // Definindo o valor calculado como o valor do item do pedido
        return $precoTotal;
    }
}

