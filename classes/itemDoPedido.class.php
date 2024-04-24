<?php
class ItemDoPedido_class
{
    private $valor;

    private $itens = [];
    private $descricao;

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }
<<<<<<< HEAD
}
=======
  
}





//$retorno = implode(",", $this->itens);
        
//return $retorno;
>>>>>>> 970d3a5b7e3fa1bb2bea32496412260c879e3053
