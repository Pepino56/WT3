<?php
    // $pole = [6=>1,'aaa'=>2,5, []]; //moznost prirazni indexu v poli
    // var_dump($pole);
    // //echo '</pre>'; //pouze ladici nez na realne pouzivani na webu
    // $osoba =[
    //     'jmeno' => 'Tomas',
    //     'prijmeni' => 'Novak',
    //     'deti' => [1,2,3]
    // ];
    // var_dump($osoba);
    // echo $osoba['jmeno'];
    // echo count($pole);
    // var_dump(isset($pole['aaa'])); //kontrola pritomnosti prvku
    // // $existuje = array_key_exists(key: 'laaa', $pole);
    // // echo $existuje;

    // //podminky
    // $cislo = 1;
    // if($cislo > 0){
    //     echo '>0';
    // }elseif($cislo<0){
    //     echo '<0';
    // }else{
    //     echo '0';
    // }

    // //cykly
    // for($i = 0; $i <10; $i++){
    //     echo $i.'<br>';
    // }
    // echo '<br>';
    // $j = 3;
    // while($j<10){
    //     echo $j.'<br>';
    //     $j++;
    // }
    // echo '<br>';
    // $jmena = [0=>'jan', 'pavel', 'martin'];
    // foreach($jmena as $klic=>$jmeno){
    //     echo $klic.': '.$jmeno.'<br>';
    // }

    $osoba = [
        'jmeno' => 'jan',
        'prijmeni' => 'novy',
    ];
    foreach($osoba as $promena => $hodnota){
        echo $promena.': '.$hodnota.'<br>';
    }
    //in_array()//hleda prvky v poli a lze pomocí tohoto a příkazu continue urcit ktereé prvky se třeba nebudou vypisovat