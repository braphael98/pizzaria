<?php
require_once 'cliente.class.php';
require_once 'itemDoPedido.class.php';
<<<<<<< HEAD
=======

>>>>>>> 970d3a5b7e3fa1bb2bea32496412260c879e3053

class Pedido_class
{
    private Cliente_class $cliente;
    private array $itemDoPedido = [];
    private $total;
    private $taxaDeEntrega;
    
<<<<<<< HEAD
    public function addItemDoPedidoPizza($itemDoPedido)
    {   
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPreco());
    }
    public function addItemDoPedidoBatata($itemDoPedido)
    {   
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPrecoBatata());
=======
    public function addItemDoPedido($itemDoPedido)
    {   
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPreco());     
>>>>>>> 970d3a5b7e3fa1bb2bea32496412260c879e3053
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
<<<<<<< HEAD
    
    public function addTotal($valor){
        $this->total += $valor;
    }
    
=======
    public function addTotal($valor){
        $this->total += $valor;
    }
>>>>>>> 970d3a5b7e3fa1bb2bea32496412260c879e3053
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
        
<<<<<<< HEAD
        echo "Itens: / Valores: <br>";
        foreach ($this->itemDoPedido as $itemDoPedido) {
            echo $itemDoPedido->getDescricao() . " ";
            echo "R$" . $itemDoPedido->getValor() . "<br>";
=======
        foreach ($this->itemDoPedido as $itemDoPedido) {
            echo "Valor: " . $itemDoPedido->getValor() . "<br>";
            echo "Item: " . $itemDoPedido->getDescricao() . "<br>";
>>>>>>> 970d3a5b7e3fa1bb2bea32496412260c879e3053
        }
    }
}
?>
