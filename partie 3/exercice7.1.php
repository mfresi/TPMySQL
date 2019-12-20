<?php require("Personnage_exo7.1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice 7.1</title>
    <h1>Exercice 7.1</h1>
</head>
<body>

    <?php 

             $_id = new PDO('mysql:host=192.168.65.195; dbname=Exercice_php_partie3;charset=utf8','matmat', 'matmat');

             $LesDonneesBrutesDeLaBdd = $_id->query("SELECT * FROM Personnage");  
             $Tableau = Array(new personnage(1),new personnage(2),new personnage(3)) ;
             
             while($TableauDeDonnee = $LesDonneesBrutesDeLaBdd ->fetch())
             { 
                array_push($TableauDeDonnee, $_id); 
                $_id = $Tableau[1]; 
                $_id = $Tableau[2];
                $_id = $Tableau[3]; 
             }

            $Tableau->getStatPerso();  



                
            
             
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