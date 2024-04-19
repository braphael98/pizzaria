<?php
class Cerveja_class extends ItemDoPedido_class{
    private $tamanho;
    private $tipo;

    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }
    public function getTamanho(){
        return $this->tamanho;
    }

}
?>