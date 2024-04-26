<?php

use Pedido_class;

class Faturamento_class
{
    private array $pedido;
    public function addPedido(Pedido_class $pedido)
    {
        $this->pedido[] = $pedido;
    }
    public function getPedido()
    {
        return $this->pedido;
    }
    public function historico($npedido){
      
    }
}
?>