<?php
class Avaliacao_class{
 private $nota;
 private $observacao;
 public function setNota($nota){
    $this->nota = $nota;
 }
 public function getNota(){
    return $this->nota;
 }   
}
?>