<?php 
    class User {
        public $nome;

        public $email;

        public $sconto = 0;

        protected $prodottiScelti = [];

        public function __construct($_nome, $_email) {
            $this->nome = $_nome;
            $this->email = $_email;
        }

        public function aggiungiProdotti($prodotto) {
            $this->prodottiScelti[] = $prodotto;
        }

        public function getProdotti() {
            return $this->prodottiScelti;
        }

        public function sommaCostoProdotti() {
            $somma = 0;
            foreach($this->prodottiScelti as $prodotto) {
                $somma += $prodotto->prezzo;
            }

            // togliamo lo sconto
            $somma -= ($somma * $this->sconto / 100);

            return $somma;
        }  

        public function pagaAcquisti($saldo) {
            if($saldo < $this->sommaCostoProdotti()) {
                return 'ko';
            } else {
                return 'ok';
            }
        }
    }
?>