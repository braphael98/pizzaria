<?php
//echo "<pre>";
//print_r($_POST);
//exit;
require_once 'pedido.class.php';
require_once 'cliente.class.php';
require_once 'pizza.class.php';
require_once 'itemDoPedido.class.php';
require_once 'batatinha.class.php';
require_once 'cerveja.class.php';
require_once 'refrigerante.class.php';

// Cria o endereço do cliente
$endereco = new Endereco_class();
$endereco->setRua($_POST['rua']);
$endereco->setBairro($_POST['bairro']);
$endereco->setCidade("Erechim");

// Cria o cliente e defina o endereço
$cliente = new Cliente_class();
$cliente->setNome($_POST['nome']);
$cliente->setEndereco($endereco);

// Cria o pedido e defina o cliente
$pedido = new Pedido_class();
$pedido->setCliente($cliente);

// Calcula a taxa de entrega
$pedido->calcularTaxaDeEntrega();

// Adiciona itens ao pedido




//se chegado com o checkbox executa o comando
if (isset($_POST["itensDoPedido"]['pizza'])) {
    $pizza = new Pizza_class();
    $pizza->setTamanho($_POST['tamanho']);
    $pizza->setSabor($_POST['pizza']);
    $pizza->setBorda($_POST['borda']);
    $pizza->setDescricao("Pizza: " . $pizza->getTamanho() . " " . $pizza->getSabor() . " " . "Borda" . " " . $pizza->getBorda());
    $pedido->addItemDoPedidoPizza($pizza);
}
if (isset($_POST["itensDoPedido"]["batata"])) {
    $batatinha = new Batatinha_class();
    $batatinha->setTamanho($_POST['tamanhoBatata']);
    $batatinha->setSabor($_POST['batata']);
    $batatinha->setDescricao("Batata" . " " . $batatinha->getTamanho() . " " . $batatinha->getSabor());
    $pedido->addItemDoPedidoBatata($batatinha);
}
if (isset($_POST["itensDoPedido"]["cerveja"])) {
    $cerveja = new Cerveja_class();
    $cerveja->setTamanho($_POST["tamanhoCerveja"]);
    $cerveja->setTipo($_POST["marca"]);
    $cerveja->setDescricao("Cerveja: "." " . $cerveja->getTamanho() . " ". $cerveja->getTipo());
}
if (isset($_POST["itensDoPedido"]["refrigerante"])){
    $refrigerante = new Refrigerante_class();
    $refrigerante->setTamanho($_POST["tamanhoRefri"]);
    $refrigerante->setTipo($_POST['marcaRefri']);
    $refrigerante->setDescricao(''. ' '.
}


// Calcula o total do pedido
$pedido->calcularTotal();

// Imprime o pedido
$pedido->imprimir();
