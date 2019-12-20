<?php require("Personnage_exo6.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 6</title>
    <h1>Exercice 6</h1>
</head>
<body>

    <?php 
             $perso1 = new personnage(1);
             $perso1->getStatPerso(); 
             $perso2 = new personnage(2);
             $perso2->getStatPerso();

             $perso1->attaquer($perso2);
             $perso2->afficherVie();
             $perso2->attaquer($perso1);
             $perso1->afficherVie();
             $perso1->soigner(150);
             $perso1->getSoin();
             //$perso2->soigner(100);
             //$perso2->getSoin();
             
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