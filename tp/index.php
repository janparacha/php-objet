<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php if(isset($_GET["erreur"]))
    {
        echo"Désolé votre rib est faux";
    }
    ?>

    <?php if (isset($_GET["success"])) 
    {
        echo "le formulaire a été enregistré";
    }
    ?>

    <form action="traitement.php" method="post">

    <label for="bankcode">Identifiant de la banque</label>
    <input type="text" id="bankcode" name="bankcode" >

    <label for="agencycode">Identifiant de l'agence</label>
    <input type="text" id="agencycode" name="agencycode" >

    <label for="accountnumber">Numéro de compte</label>
    <input type="text" id="accountnumber" name="accountnumber" >

    <label for="ribkey">Clé bancaire</label>
    <input type="text" id="ribkey" name="ribkey" >

    <input type="submit" value="envoyer">

    </form>

</body>
</html>