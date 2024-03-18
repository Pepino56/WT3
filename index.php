
<!-- 
sdfgdf
<h1>sdsdsdsdsd<h/1> -->
<?php
    include_once 'menu.php';
    //error_reporting()  reportovani  chyb
    const MOJE_KONSTANTA = 5;
    $a = 'tohle je promenna';
    $pole = [4, 'asssd'];
    echo $a;
    echo " ";
    $a = 6;
    echo $a;
    echo " ";
    echo MOJE_KONSTANTA;
    // phpinfo(); // info o php verzi
    echo '<a href="http://www.seznam.cz">odkaz</a>';
    echo $a.'daůsio'.'sad';
    var_dump($a);
    echo '<h1>Web. tech. 3</h1>';

    include 'a.php';
    include 'a.php'; // pri chybe vyhodi pouze warning a jede dal
    require 'a.php'; // vyhodi fatal error a zastavi se
    include_once 'a.php'; // nacte pouze jednou a u dalsi volani pouze kontroluje zda bylo jiz drive nacteno

?>