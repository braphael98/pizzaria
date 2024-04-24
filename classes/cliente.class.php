<?php
require_once 'endereco.class.php';
class Cliente_class extends Endereco_class
{
    private $nome;
    private $endereco; // Agora armazenamos uma instância da classe Endereco_class

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setEndereco(Endereco_class $endereco)
    {
        $this->endereco = $endereco;
    }
    public function getEndereco()
    {
        return $this->endereco;
    }
}
