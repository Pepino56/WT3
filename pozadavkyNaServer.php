<!-- <pre> lepsi vypis var_dump() -->
   
<form action="pozadavkyNaServer.php" method="POST">
    <input type="text" name="jmeno">
    <button>Odestal</button>

    <textarea name="popis"></textarea>
    <input type="checkbox" value="1" name="souhlas">
    <label><input type="radio" name="barva" value="modra">modra</label><br>
    <label><input type="radio" name="barva" value="cervena">cervena</label><br>
    <label><input type="radio" name="barva" value="zluta">zluta</label><br>

    <select name="velikost[]" multiple>
        <option value="M">Medium</option>
        <option value="L">Large</option>
        <option value="S">Small</option>
        <option value="kralik">Kralik</option>
    </select>
</form>
<?php
    //zpracovani prichozich pozadavku na server
    //superglobalni promenna
    //var_dump($_SERVER);
   // var_dump($_COOKIE);
    // var_dump($_GET);//pokud do adresy doplnim ?jmeno=Karel&prijmeni=Novak
    // var_dump($_POST);
    
    // $souhlasil = $_REQUEST['souhlas'] ?? false;
    // echo $souhlasil ? 'Ano' : 'Ne';
    
    var_dump($_REQUEST);//slouci get i post dohramady a nerozlisuje je 

