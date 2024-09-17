<?php
class Pedido {
    var $tamanho, $quantidade;

    public function validar($quantidade, $tamanho) {
        $this->tamanho = $tamanho;
        $this->quantidade = $quantidade;
    }

    public function preço() {
        if ($this->tamanho == "pequena") {
            return 20;
        } elseif ($this->tamanho == "media") {
            return 25;
        } elseif ($this->tamanho == "grande") {
            return 30;
        }
        return 0;
    }

    public function finalizar() {
        $total = $this->preço();
        $finalizar = $total * $this->quantidade;
        return $finalizar;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tamanho = $_POST['tamanho'];
    $quantidade = $_POST['quantidade'];


    $Pedido = new Pedido(); 
    $Pedido->validar($quantidade, $tamanho);
    $precoFinal = $Pedido->finalizar();
}
?>
