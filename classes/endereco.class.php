<?php
class Endereco_class
{
    private $rua;
    private $bairro;


    public function setRua($rua)
    {
        $this->rua = $rua;
    }
    public function getRua()
    {
        return $this->rua;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }
    public function getBairro()
    {
        return $this->bairro;
    }
    public function inserirEndereco()
    {
        $database = new Conexao();
        $db = $database->getConnection();
        $sql = 'INSERT INTO endereco (rua, bairro) VALUES (:rua, :bairro)';
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':rua', $this->rua);
            $stmt->bindParam(':bairro', $this->bairro);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Erro ao inserir endereço: ' . $e->getMessage();
            return false;
        }
    }
}
