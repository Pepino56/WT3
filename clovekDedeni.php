<?php
    class Clovek{
        public $jmeno;

        public function __construct($jmeno){
            $this->jmeno=$jmeno;
        }
        public function pozdrav(){
            return 'ahoj tady '.$this->jmeno.'<br>';
        }
    }
    
    class Anglican extends Clovek{
        public function pozdrav(){
            return 'Hi, I am '.$this->jmeno.'<br><br>';
        }
    }
    
    $petr = new Clovek('Petr');
    $John = new Anglican('Jon');
    echo $petr->pozdrav();
    echo $John->pozdrav();