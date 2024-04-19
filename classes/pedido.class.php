<?php
class Pedido_class
{
    private $total;
    private $taxaDeEntrega;
    public function setTotal($total)
    {
        $this->total = $total;
    }
    public function getTotal()
    {
        return $this->total;
    }
    public function setTaxaDeEntrega($taxaDeEntrega)
    {
        $this->taxaDeEntrega = $taxaDeEntrega;
    }
}
?>