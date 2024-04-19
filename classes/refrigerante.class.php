<?php
class  Refrigerante_class extends ItemDoPedido_class {
    private $tamanho;
    private $contato;
    public function setTamaho($tamanho){
        $this->tamanho = $tamanho;
    }
    public function getTamanho() {
        return $this->tamanho;
    }
}
?>