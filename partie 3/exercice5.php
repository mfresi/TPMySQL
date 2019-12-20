<?php require("Personnage_exo5.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 5</title>
    <h1>Exercice 5</h1>
</head>
<body>

    <?php 
            $perso1 = new personnage(2);
            $perso1->getStatPerso();
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