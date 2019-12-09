<?php require("Personnage.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 3</title>
    <h1>Exercice 3</h1>
</head>
<body>

    <?php 
        $Personnage1 = new Personnage("Mattei");
        $Personnage1->afficherVie();
        $Personnage1->afficherPseudo();

    ?>



<a href="//192.168.65.195/TPMySQL/partie%203/">Retour</a>
</body>
</html>