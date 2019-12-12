<?php require("Personnage_exo4.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 4</title>
    <h1>Exercice 4</h1>
</head>
<body>

    <?php 
        $Personnage1 = new Personnage("Julien");
        $Personnage1->StatPerso(100,50);

        $Personnage2 = new Personnage("Mattei");
        $Personnage2->StatPerso(150,30);
        
        $Personnage1->attaquer($Personnage2);
        $Personnage2->afficherVie();
        $Personnage2->attaquer($Personnage1);
        $Personnage1->afficherVie();

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