<?php
class Cerveja_class extends ItemDoPedido_class
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

    public function calcularPrecoCerveja() 
    {
        $precoBase = 0;
        switch ($this->tamanho) {
            case 'longneck':
                $precoBase = 9;
                break;
            case 'latao':
                $precoBase = 8;
                break;
        }
        $precoTipo = 0; 
        switch ($this->tipo) {
            case 'heineken':
                $precoTipo = 5;
                break;
            case 'corona':
                $precoTipo = 5;
                break;
        }
        $precoTotal = $precoBase + $precoTipo;
        $this->setValor($precoTotal); 
        return $precoTotal;
    }
}
