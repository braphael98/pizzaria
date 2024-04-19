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
}
