<?php
class Pedido_class
{
   
  private Cliente_class $cliente;
    private array $itemDoPedido = [];
    private $total;
    private $taxaDeEntrega;
    
    private $numeroDoPedido;


    
    
    public function addItemDoPedidoPizza($itemDoPedido)
    {   
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPrecoPizza());
    }
    public function addItemDoPedidoBatata($itemDoPedido)
    {
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPrecoBatata());
    }
    
    public function addItemDoPedidoRefri($itemDoPedido)
    {
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPrecoRefri());
    }
    public function addItemDoPedidoCerveja($itemDoPedido)
    {
        $this->itemDoPedido[] = $itemDoPedido;
        $this->addTotal($itemDoPedido->calcularPrecoCerveja());
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
    public function calcularTaxaDeEntrega()
    {
        $enderecoCliente = $this->cliente->getEndereco();
        
        $bairro = $enderecoCliente->getBairro();
        switch ($bairro) {
            case 'Centro':
                $this->taxaDeEntrega = 8; 
                break;
            case 'Periferia':
                $this->taxaDeEntrega = 9; 
                break;
            case 'Rural':
                $this->taxaDeEntrega = 10; 
                break;    
            default:
                $this->taxaDeEntrega = 15;
                break;
        }
        

    }
    public function calcularTotal()
    {
        $this->total = 0;

        // Calcular o total dos itens do pedido
        foreach ($this->itemDoPedido as $itemDoPedido) {
            $this->total += $itemDoPedido->getValor();
        }

        // Adicionar a taxa de entrega ao total
        $this->total += $this->taxaDeEntrega;
    }
    public function getNumeroDoPedido() {
        return $this->numeroDoPedido;
    }
    
    public function setNumeroDoPedido($numeroDoPedido) {
        $this->numeroDoPedido = $numeroDoPedido;
    }
    
    
    public function imprimir()
    {   echo "<!DOCTYPE html>";
        echo "<html lang='pt-br'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Recibo do Pedido</title>";
        echo "<link rel='stylesheet' href='style.css'>";
        echo "</head>";
        echo "<body>";
        echo"<form>";
        echo"<ul>";
        echo "Numero do Pedido: " ." ". $this->getNumeroDoPedido();
        echo"<h2>&#127829; Detalhes do Pedido &#127829;</h2>";
        echo "Total: " . $this->getTotal() . "<br>";
        echo "Taxa de Entrega: " . $this->getTaxaDeEntrega() . "<br>";
        echo "Cliente: " . $this->getCliente()->getNome() . "<br>";
        
        echo "Itens: / Valores: <br>";
        foreach ($this->itemDoPedido as $itemDoPedido) {
            echo $itemDoPedido->getDescricao() . " ";
            echo "R$" . $itemDoPedido->getValor() . "<br>";
            
        }
        echo"</ul>";
        echo "</form>";
        
    }
 }
?>