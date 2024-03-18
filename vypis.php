
<form action="vypis.php" method="POST">
    
    <select name="velikost[]" multiple>
        <option value="M">Medium</option>
        <option value="L">Large</option>
        <option value="S">Small</option>
        <option value="kralik">Kralik</option>
    </select>
    <button>Odestal</button>

</form>
<?php
    //ukol vybez z moznosti a jejich vypis na stranku

    echo '<ul>';
    foreach($_REQUEST['velikost'] as $x){
        echo '<li>'.$x.'<br>';
    }
    echo '</ulr>';