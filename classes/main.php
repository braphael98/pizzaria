<?php
require_once 'pedido.class.php';
require_once 'cliente.class.php';
require_once 'pizza.class.php';
require_once 'itemDoPedido.class.php';

// Criação de um objeto Cliente_class
$cliente = new Cliente_class();
$cliente->setNome("João"); // Supondo que exista um método setNome na classe Cliente_class

// Criação de um objeto Pedido_class
$pedido = new Pedido_class();

// Definição do cliente para o pedido
$pedido->setCliente($cliente);

// Criação de uma pizza como item do pedido
$count = 0;
do{
    $pizza = new Pizza_class();
    $pizza->setTamanho("Grande");
    $pizza->setSabor("Calabresa");
    $pizza->setBorda("Catupiry");
    
    $pizza->setDescricao("Pizza de Calabresa Grande com Borda de Catupiry");
    
    $pedido->addItemDoPedido($pizza);

    $count++;
}while($count <= 5);



// Definição dos valores dos atributos do pedido
$pedido->setTotal($pizza->getValor() + $pedido->getTaxaDeEntrega()); // Supondo que a taxa de entrega seja adicionada ao total

// Chamada da função imprimir para exibir os atributos do pedido e do cliente
$pedido->imprimir();
?>
