<?php 
class MainAnimalProduct {
    public $marca;

    public $prezzo;

    public $quantita;

    public $nome;

    public function __construct($_marca, $_prezzo, $_quantita, $_nome) {
        $this->marca = $_marca;
        $this->prezzo = $_prezzo;
        $this->quantita = $_quantita;
        $this->nome = $_nome;
    }

    public function getInfo() {
        return "$this->marca $this->nome - Quantità: $this->quantita kg - Prezzo: $this->prezzo €";
    }

    
}
?>
