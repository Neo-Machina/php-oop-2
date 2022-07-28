<?php 
    require_once __DIR__ . '/MainAnimalProduct.php';

    class CiboProduct extends MainAnimalProduct {
        public $dataScadenza;

        public $tipologiaCibo;

        public $quantita;

        // override
        public function __construct($_marca, $_prezzo, $_nome, $_quantita) {
            $this->marca = $_marca;
            $this->prezzo = $_prezzo;
            $this->nome = $_nome;
            $this->quantita = $_quantita;
        }

        // override
        public function getInfo() {
            return "$this->marca $this->nome - Quantità: $this->quantita kg - Prezzo: $this->prezzo €";
        }
    }
?>