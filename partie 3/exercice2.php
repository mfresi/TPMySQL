<?php require("Personnage_exo2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 2</title>
    <h1>Exercice 2</h1>
</head>
<body>

    <?php 
        $Perso1 = new Personnage();
        $Perso1->afficherVie();
    ?>



<a href="../partie%203/">Retour</a>

<?php
        echo 
     highlight_file(
     './'.
     basename(
     __FILE__),
     true);
?>
</body>
</html>