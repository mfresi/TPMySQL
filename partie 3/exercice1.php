<?php require("user1.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style1.css">
    <title>Exercice 1</title>
    <h1>Exercice 1</h1>
</head>
<body>
    <?php 

        $Usernumero1 = new user1();
    ?>

<div class = "entete">

    <?php echo "User";?>

<div class = "corps">
      
        <tr>
            <td>
                <p>Nom : Fresi</p>
                <p>Prenom : Mattei</p>
            </td>
        </tr>
</div>

<div class = "piedpage">

    <?php $Usernumero1->afficherUser();?>

</div>

<textarea>

<?php 

        $Usernumero1 = new user1();
    ?>

<div class = "entete">

    <?php echo "User";?>

<div class = "corps">
      
        <tr>
            <td>
                <p>Nom : Fresi</p>
                <p>Prenom : Mattei</p>
            </td>
        </tr>
</div>

<div class = "piedpage">

    <?php $Usernumero1->afficherUser();?>

</div>

</textarea>


<a href="//192.168.65.195/TPMySQL/partie%203/">Retour</a>
</body>
</html>
