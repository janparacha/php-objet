<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP objet</h1>

    <h2>Instanciation</h2>
   
   <?php 
    
    
    
    include_once('user.class.php'); 
    $user1 = new User();
    $user2 = new User();
    $user3 = new User();
    $user4 = new User();

    // $user1 -> pseudo = "Dupont"; // Si la propriété était 'public'
    $user1 -> setPseudo ("Dupont"); // On passe par un setter car la propriété est "private"
    $user2 -> setPseudo('Durand');
    $user3 -> setPseudo ('Dubois');
    $user4 -> setPseudo ('123456789');

    $user1 -> setEmail ('mustafa94@hotmail.fr');
    $user1->envoyerEmail('Le titre','Le texte du mail');
    var_dump($user1);
    
    ?>

    <h2>Héritage</h2>

    <?php 
    include_once("admin.class.php");
    $admin1 = new Admin ("Admin1","admin1@mail.com","ADM");
    my_var_dump($admin1);
    ?>

</body>
</html>