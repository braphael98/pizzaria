<?php
class Pizza_class_model extends ItemDoPedido_class
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
}
