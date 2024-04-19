<?php
class Pizza_class extends ItemDoPedido_class
{
    private $tamanho;
    private $sabor;
    private $borda;

    public function setTamanho($tamanho)
    {
        $this->tamanho = $tamanho;
    }
    public function getTamanho()
    {
        return $this->tamanho;
    }
    public function setSabor($sabor)
    {
        $this->sabor = $sabor;
    }
    public function getSabor()
    {
        return $this->sabor;
    }
    public function setBorda($borda)
    {
        $this->borda = $borda;
    }
    public function getBorda()
    {
        return $this->borda;
    }
    public function calcularPreco()
    {
        // Defina os preços baseados no tamanho da pizza
        $precoBase = 0;
        switch ($this->tamanho) {
            case 'Pequena':
                $precoBase = 20; // Exemplo de preço para uma pizza pequena
                break;
            case 'Média':
                $precoBase = 25; // Exemplo de preço para uma pizza média
                break;
            case 'Grande':
                $precoBase = 30; // Exemplo de preço para uma pizza grande
                break;
            // Adicione mais casos conforme necessário para outros tamanhos
        }

        // Ajuste o preço com base no sabor da pizza (se necessário)
        // Suponha que cada sabor tenha um preço adicional fixo
        $precoSabor = 0;
        switch ($this->sabor) {
            case 'Calabresa':
                $precoSabor = 5; // Exemplo de preço adicional para o sabor calabresa
                break;
            // Adicione mais casos conforme necessário para outros sabores
        }

        // Ajuste o preço com base na borda da pizza (se necessário)
        // Suponha que cada tipo de borda tenha um preço adicional fixo
        $precoBorda = 0;
        switch ($this->borda) {
            case 'Catupiry':
                $precoBorda = 3; // Exemplo de preço adicional para borda de catupiry
                break;
            // Adicione mais casos conforme necessário para outros tipos de borda
        }

        // Calcule o preço total somando o preço base, o preço do sabor e o preço da borda
        $precoTotal = $precoBase + $precoSabor + $precoBorda;

        return $precoTotal;
    }
}

