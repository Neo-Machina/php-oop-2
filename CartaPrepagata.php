<?php 
    class CartaPrepagata {
        public $saldo;

        public $nomeTitolare;

        public $numero;

        public $dataScadenza;

        public $cvv;

        public function __construct($_saldo, $_nomeTitolare, $_numero, $_dataScadenza, $_cvv) {
            $this->saldo = $_saldo;
            $this->nomeTitolare = $_nomeTitolare;
            $this->numero = $_numero;
            $this->dataScadenza = $_dataScadenza;
            $this->cvv = $_cvv;
        } 
    }
?>