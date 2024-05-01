<?php
require_once 'conexao.class.php';
class ItemDoPedido_class
{
    private $valor;
    private $descricao;
    private $nomeItem;
    
    public function setNomeItem($nomeItem){
        $this->nomeItem = $nomeItem;
    }
    public function getNomeItem(){
        return $this->nomeItem;
    }
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

    public function inserirBanco(){
        $database = new Conexao();
        $db = $database->getConnection();

        $sql = 'INSERT INTO itensdopedido (descricao, valor) values (:descricao, :valor)';
        try{
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':descricao',$this->descricao);
            $stmt->bindParam(':valor',$this->valor);
            $stmt->execute();
            return true;
        } catch(PDOException $e){
            echo 'Erro ao inserir cliente'. $e->getMessage();
            return false;
        }
    }
}
?>
