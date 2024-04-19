<?php
class Endereco_class
{
    private $rua;
    private $bairro;
    private $cidade;

    public function setRua($rua)
    {
        $this->rua = $rua;
    }
    public function getRua()
    {
        return $this->rua;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getBairro($bairro)
    {
        return $this->bairro;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
}
?>