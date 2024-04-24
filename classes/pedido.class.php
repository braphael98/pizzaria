<?php
require_once 'cliente.class.php';
require_once 'itemDoPedido.class.php';

class Pedido_class
{
    private Cliente_class $cliente;
    private array $itemDoPedido = [];
    private $total;
    private $taxaDeEntrega;
    
    public function addItemDoPedidoPizza($itemDoPedido)
    {   
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPreco());
    }
    public function addItemDoPedidoBatata($itemDoPedido)
    {   
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPrecoBatata());
    }
    
    public function getItemDoPedido()
    {
        return $this->itemDoPedido;
    }
    
    public function setCliente(Cliente_class $cliente)
    {
        $this->cliente = $cliente;
    }
    
    public function getCliente()
    {
        return $this->cliente;
    }
    
    public function setTotal($total)
    {
        $this->total = $total;
    }
    
    public function addTotal($valor){
        $this->total += $valor;
    }
    
    public function getTotal()
    {
        return $this->total;
    }

    public function setTaxaDeEntrega($taxaDeEntrega)
    {
        $this->taxaDeEntrega = $taxaDeEntrega;
    }
    
    public function getTaxaDeEntrega()
    {
        return $this->taxaDeEntrega;
    }

    public function imprimir()
    {
        echo "Total: " . $this->getTotal() . "<br>";
        echo "Taxa de Entrega: " . $this->getTaxaDeEntrega() . "<br>";
        echo "Cliente: " . $this->getCliente()->getNome() . "<br>";
        
        echo "Itens: / Valores: <br>";
        foreach ($this->itemDoPedido as $itemDoPedido) {
            echo $itemDoPedido->getDescricao() . " ";
            echo "R$" . $itemDoPedido->getValor() . "<br>";
        }
    }
}
?>
