<?php 
    require_once __DIR__ . '/ProductContabile.php';

    class MainAnimalProduct {
        use ProductContabile;

        public $marca;

        public $prezzo;

        public $nome;

        public $taglia = 'media';

        public function __construct($_marca, $_prezzo, $_nome) {
            $this->marca = $_marca;
            $this->prezzo = $_prezzo;
            $this->nome = $_nome;
        }

        public function getInfo() {
            return "$this->marca $this->nome - Prezzo: $this->prezzo €";
        }
    }
?>
