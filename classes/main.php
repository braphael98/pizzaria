<?php
require_once 'pedido.class.php';
require_once 'cliente.class.php';
require_once 'pizza.class.php';
require_once 'itemDoPedido.class.php';
require_once 'batatinha.class.php';
require_once 'cerveja.class.php';
require_once 'refrigerante.class.php';

// Cria o endereço do cliente
$endereco = new Endereco_class();
$endereco->setRua("Rua A");
$endereco->setBairro("Centro");
$endereco->setCidade("Erechim");

// Cria o cliente e defina o endereço
$cliente = new Cliente_class();
$cliente->setNome("João");
$cliente->setEndereco($endereco);

// Cria o pedido e defina o cliente
$pedido = new Pedido_class();
$pedido->setCliente($cliente);

// Calcula a taxa de entrega
$pedido->calcularTaxaDeEntrega();

// Adiciona itens ao pedido
$pizza = new Pizza_class();
$pizza->setTamanho("Grande");
$pizza->setSabor("Calabresa");
$pizza->setBorda("Catupiry");
$pizza->setDescricao("Pizza: " . $pizza->getTamanho() . " " . $pizza->getSabor() . " " . $pizza->getBorda());
$pedido->addItemDoPedidoPizza($pizza);

// Calcula o total do pedido
$pedido->calcularTotal();

// Imprime o pedido
$pedido->imprimir();
?>