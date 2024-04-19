<?php
class Cliente_class
{
    private $nome;
    private $contato;

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
}
?>