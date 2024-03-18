<form action="posli.php" method="POST" enctype="multipart/form-data">
    
<input type="file" name="obrazek">
    
    
    <button>Odeslat</button>

</form>
<?php
    //input
    echo'<pre>';
    echo var_dump($_FILES);
    if(isset($_FILES['obrazek'])){//hlidani zda byl soubor skutecne nahran
        move_uploaded_file($_FILES['obrazek']['tmp_name'], 'a.jpg'); //nutnost nahrat obrazek, jinak je docasne ulozeny na serveru v adrese pod tmp_name
    }
