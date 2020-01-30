<?php require("Personnage_exo_avances.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercice_avancés</title>
    <h1>Exercice avancés</h1>
</head>

<body>

    <?php

    try {
        $base = new PDO('mysql:host=localhost; dbname=Exercice_php_partie3', 'root', 'root');
        $DonneeBruteUser = $base->query("select * from Personnage");
        $TabPersoIndex = 0;
        while ($tab = $DonneeBruteUser->fetch()) {
            //ici on creer nos objets User pour chaque tuple de notre requête
            //et on les places dans un tableau de Personnage
            $TabPerso[$TabPersoIndex++] = new personnage($tab['id_Personnage'], $tab['Pseudo']);
        }
    } catch (exception $e) {
        $e->getMessage();
    }
    ?>
    <p><b>Affichage pour formulaire avec la liste déroulante :</b></p>
    <?php
    if (isset($_POST["Personnage"])) {
        //recherche de l'id dans le tableau de personnage
        foreach ($TabPerso as $objetPerso) {
            if ($objetPerso->getId() == $_POST["Personnage"]) {
                $objetPerso->afficherPseudo();
            }
        }
    } else {
        echo "Aucun personnage selectionné";
    }
    ?>
    <p><b>Affichage pour formulaire avec les checkbox :</b></p>
    <?php
    if (isset($_POST["Perso"])) {
        //recherche de l'id dans le tableau de personnage
        foreach ($_POST['Perso'] as $idPerso) {
            $DonneeBruteUser = $base->query("DELETE FROM Personnage WHERE id_Personnage = $idPerso");
            $i = 0;
            foreach ($TabPerso as $objetPerso) {
                if ($objetPerso->getId() == $idPerso) {
                    $objetPerso->supprimerPseudo();
                }
            }
        }
    } else {
        echo "Aucune checkbox selectionné";
    }

    ?>
    <p><b>Affichage pour formulaire avec les radio boutons :</b></p>
    <?php
    if (isset($_POST["Perso2"])) {
        //recherche de l'id dans le tableau de personnage
        foreach ($_POST['Perso2'] as $idAdmin) {
            $i = 0;
            foreach ($TabPerso as $objetPerso) {
                if ($objetPerso->getId() == $idAdmin) {
                    $objetPerso->afficherPseudo();
                    unset($TabPerso[$i]);
                }
                $i++;
            }
        }
    } else {
        echo "Aucune checkbox selectionné";
    }

    ?>

<h3>Exercice n°1 :</h3>

    <FORM action="" method="POST">
        <select name="Personnage">
            <?php
            //parcours du tableau de User pour afficher les options de la liste déroulante
            foreach ($TabPerso as $objetPerso) {
                if ($objetPerso->getId() == $_POST["Personnage"]) {
                    echo '<option selected = "' . $objetPerso->getId() . '">' . $objetPerso->getNom() . '</option>';
                } else {
                    echo '<option value = "' . $objetPerso->getId() . '">' . $objetPerso->getNom() . '</option>';
                }
            }

            ?>
        </select>

        <input type="submit"></input>

    </FORM>

    <h3>Exercice n°2 :</h3>

    <FORM action="" method="POST">

        <p>Cliquez sur une checkbox pour afficher un personnage :</p>

        <?php
        foreach ($TabPerso as $objetPerso) {

            echo '<p><input type="checkbox" value = "' . $objetPerso->getId() . '" name = "Perso[]" />';
            echo '<label for = "Pseudo">' . $objetPerso->getNom() . '</label></p>';
        }
        ?>

        <input type="submit" />
    </FORM>

    <h3>Exercice n°3 :</h3>

    <FORM action="" method="POST">

        <p>Cliquez sur une checkbox pour mettre un personnage en admin :</p>

        <?php
        foreach ($TabPerso as $objetPerso) {

            echo '<p><input type="radio" value = "' . $objetPerso->getId() . '" name = "Perso2[]" />';
            echo '<label for = "Pseudo">' . $objetPerso->getNom() . '</label></p>';
        }
        ?>

        <input type="submit" />
    </FORM>

    <a href="../partie%203/">Retour</a>

    <?php
    //echo 
    //highlight_file(
    //'./'.
    //basename(
    //__FILE__),
    //true);
    ?>

</body>

</html>