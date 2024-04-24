<?php
class Refrigerante_class extends ItemDoPedido_class {
    private $tamanho;
    private $tipo;

    public function setTamanho($tamanho){
        $this->tamanho = $tamanho;
    }

    public function getTamanho() {
        return $this->tamanho;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function calcularPrecoRefri() // Corrected method name
    {
        $precoBase = 0;
        switch ($this->tamanho) {
            case 'lata':
                $precoBase = 5;
                break;
            case '600':
                $precoBase = 8;
                break;
            case '2L':
                $precoBase = 12;
                break;
        }
        $precoTipo = 0; // Corrected variable name
        switch ($this->tipo) {
            case 'Limao':
                $precoTipo = 5;
                break;
            case 'Coca':
                $precoTipo = 5;
                break;
            case 'Guarana':
                $precoTipo = 10;
                break;
        }
        $precoTotal = $precoBase + $precoTipo;
        $this->setValor($precoTotal); // Set the calculated value as the item's value
        return $precoTotal;
    }
}
?>
