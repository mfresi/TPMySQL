<?php require("user.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TPMySQL</title>
</head>
<body>
        <?php echo "<h1>TPMySQL</h1>"; 
        
            $Utilisateur1 = new user();
            $Utilisateur1->SetNom("mattei");

           

            //Coder :

            $Utilisateur1->AfficherNom();
        ?>
        <html>
        <form action="index.php" method="POST">
            <p>
            <input type="text" name="Nom" />
            <input type="text" name="MDP" />
            <input type="submit" value="Valider" />
            </p>
            </form>
        </html>
        <?php 
            if (isset($_POST['MDP'])){

                $isConnect = $Utilisateur1->VerifMDP($_POST['Nom'],$_POST['MDP']);
                if($isConnect){
                    echo "connecté";
                    try {
                        $maBase=new PDO('mysql:host=192.168.65.195; dbname=medecin_fresi;charset=utf8','mattei', 'mattei');
                        $LesDonneesBrutesDeLaBdd = $maBase->query("SELECT medecin.nom,medecin.prenom,medicament.nomCommercial 
                                                                   FROM `medecin`,`prescription`,`medicament`,`consultation` 
                                                                   WHERE medicament.id_codeSS = prescription.id_codeSS 
                                                                   AND prescription.id_numConsultation = consultation.id_numConsultation 
                                                                   AND consultation.id_matricule = medecin.id_matricule ");

                        echo "<table>";   

                        while ($TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch())
                    {       echo"<tr>";
                            echo"<td>". $TableauDeDonnée["nom"]." ".$TableauDeDonnée["prenom"]." ".$TableauDeDonnée["nomCommercial"]."</td>";
                            echo"</tr>";
                    }

                        echo"</table>";

                        $LesDonneesBrutesDeLaBdd ->closeCursor();
                        }
                        catch (Exception $erreur){
                        }
                        
                }
                else{
                    echo "erreur";
                }
                                     }
        ?>

        <?php 
                if (isset($_POST['MDP'])){

                    $isConnect = $Utilisateur1->VerifMDP($_POST['Nom'],$_POST['MDP']);
                    if($isConnect){
                        echo "EXO 1 :";
                        try {
                            $maBase=new PDO('mysql:host=192.168.65.195; dbname=medecin_fresi;charset=utf8','mattei', 'mattei');
                            $LesDonneesBrutesDeLaBdd = $maBase->query("SELECT * FROM patient");
    
                            echo "<table>";   
    
                            while ($TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch())
                        {       echo"<tr>";
                                echo"<td>". $TableauDeDonnée["nom"]." ".$TableauDeDonnée["prenom"]."</td>";
                                echo"</tr>";
                        }
    
                            echo"</table>";
    
                            $LesDonneesBrutesDeLaBdd ->closeCursor();
                            }
                            catch (Exception $erreur){
                            }
                            
                    }
                    else{
                        echo "erreur";
                    }
                                         }
            ?> 

            <?php 
                     if (isset($_POST['MDP'])){

                        $isConnect = $Utilisateur1->VerifMDP($_POST['Nom'],$_POST['MDP']);
                        if($isConnect){
                            echo "EXO 2 :";
                            try {
                                $maBase=new PDO('mysql:host=192.168.65.195; dbname=medecin_fresi;charset=utf8','mattei', 'mattei');
                                $LesDonneesBrutesDeLaBdd = $maBase->query("SELECT * FROM patient");
        
                                echo "<table>";   
        
                                while ($TableauDeDonnée = $LesDonneesBrutesDeLaBdd ->fetch())
                            {       echo"<tr>";
                                    echo"<td>". $TableauDeDonnée["nom"]." ".$TableauDeDonnée["prenom"]."</td>";
                                    echo"</tr>";
                            }
        
                                echo"</table>";
        
                                $LesDonneesBrutesDeLaBdd ->closeCursor();
                                }
                                catch (Exception $erreur){
                                }
                                
                        }
                        else{
                            echo "erreur";
                        }
                                             }
                ?>      

<a href="//192.168.65.195/">Retour</a>
    
</body>
</html>
