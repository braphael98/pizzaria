<?php
class Refrigerante_class extends ItemDoPedido_class
{
    private $tamanho;
    private $tipo;

    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }

    public function getTamanho()
    {
        return $this->tamanho;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function calcularPrecoRefri() // Corrected method name
    {
        $precoBase = 0;
        switch ($this->tamanho) {
            case 'lata':
                $precoBase = 5;
                break;
            case '600':
                $precoBase = 8;
                break;
            case '2litros':
                $precoBase = 12;
                break;
        }
        $precoTipo = 0; // Corrected variable name
        switch ($this->tipo) {
            case 'guarana':
                $precoTipo = 5;
                break;
            case 'coca-cola':
                $precoTipo = 5;
                break;
            case 'sprite':
                $precoTipo = 5;
                break;
        }
        $precoTotal = $precoBase + $precoTipo;
        $this->setValor($precoTotal); // Set the calculated value as the item's value
        return $precoTotal;
    }
}
