function addItem(button) {
    var itemDoPedido = button.parentElement;
    var contador = itemDoPedido.children.item(0);
    var total = parseInt(contador.value);
    contador.remove();
    button.remove();

    var novoItemDoPedido = itemDoPedido.cloneNode(true);
    itemDoPedido.after(novoItemDoPedido);

    contador.value = (total + 1);

    novoItemDoPedido.prepend(contador);
    novoItemDoPedido.append(button);
}