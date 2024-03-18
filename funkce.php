<?php
    echo mojeFunkce(1, 3).'<br>';
    echo mojeFunkce(4, 0);
   // echo $b;
    function mojeFunkce($a, $b){
        if ($b == 0){
            return 'nezle delit nulou';
        }else{
            $c = $a / $b;
        }
        $b=5
        return 'Funkce zavolana'.$c;
    }