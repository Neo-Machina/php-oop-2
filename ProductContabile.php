<?php 
    trait ProductContabile {
        public $codiceProduct;

        public $numeroFattura;

        public function __construct($_codiceProduct, $_numeroFattura) {
            $this->codiceProduct = $_codiceProduct;
            $this->numeroFattura = $_numeroFattura;
        }
    }
?>