<?php
require_once 'pedido.class.php';
require_once 'cliente.class.php';
require_once 'pizza.class.php';
require_once 'itemDoPedido.class.php';
require_once 'batatinha.class.php';

$cliente = new Cliente_class();
$cliente->setNome("João");

$pedido = new Pedido_class();

$pedido->setCliente($cliente);

$count = 0;
do{
    $pizza = new Pizza_class();
    $batatinha = new Batatinha_class();

    $pizza->setTamanho("Grande");
    $pizza->setSabor("Calabresa");
    $pizza->setBorda("Catupiry");

    $batatinha->setTamanho("Pequena");
    $batatinha->setSabor("Tradicional");
    
    
    
    $pizza->setDescricao("Pizza de Calabresa Grande com Borda de Catupiry");
    $batatinha->setDescricao('Varias Batata');
    
    $pedido->addItemDoPedidoPizza($pizza);
    $batatinha->addItemDoPedidoBatata($batatinha); //ERRO CONCERTAR @!
    
    $count++;
}while($count <= 10);


//$pedido->setTotal($pizza->getValor() + $pedido->getTaxaDeEntrega()); // Supondo que a taxa de entrega seja adicionada ao total

$pedido->imprimir();
?>
