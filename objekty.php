<?php
    //tridy
    class Auto{
        public $rz;
        public $barva;
         public static $technicka = 2;
         public $axRychlost;

         const TYPE_MAX_DALNICE = 'dalnice';


        public function __construct($rz, $barva = 'bila'){
            $this->rz=$rz;
            $this->barva=$barva;
        }

        function nastavRZ($rz){
            $this->rz=$rz;
        }

        function vratBarvu(){
            return $this->barva;
        }

        public function vratMaxRychlost($lokace){
            $maxPovoleno = self::maxRychlost($lokace);

        }

        public static function maxRychlost($lokace){
            switch($lokace){
                case 'mesto': return 50;
                case 'dalnice': return 130;
                default: return 90;
            }
        }
    }

    $skoda = new Auto('123');
    $audi= new Auto('45', 'cervena');
    $audi->maxRychlost=250;
   //$skoda -> nastavRZ('12345');
  //  echo $skoda->rz;


    $tranktor = new Nakladak('t1');
    $tranktor->maxRychlost =20;
    var_dump($skoda);
    var_dump($audi->vratBarvu());


    echo 'doba technicke je: '.Auto::$technicka.' roky';
    echo Auto::maxRychlost('mesto');

    //dedeni

    class Nakladak extends Auto{
        $zatizeni=0;
        public function vratMaxRychlost($lokace){
            $zakladniRychlost=parent::vratMaxRychlost($lokace);
            return $zakladniRychlost-$this->zatizeni;
        }
    }