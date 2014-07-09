<?php

require_once 'core.php';
require_once 'controller/Utilisateur.php';
require_once 'model/UtilisateurManager.php';

$manager = new UtilisateurManager($bdd);

if ( isset($_POST) && isset($_POST["pseudo"]) && isset($_POST["password"]) && isset($_POST["email"]))
{
    $user = new Utilisateur($_POST['pseudo'],$_POST['password'],$_POST['email']);


    // enregistrement dans la BDD
    $manager->add($user);


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>




<h1>Création de compte</h1>

<form role="form-horizontal" action="" method="post">
    <div class="form-group">
        <label for="titre">Votre pseudo :</label>
        <input type="text" name="pseudo" class="form-control" id="" placeholder="">

        <br/><label for="titre">Votre mot de passe :</label>
        <input type="password" name="password" class="form-control" id="" placeholder="">

        <br/><label for="titre">Votre adresse email :</label>
        <input type="text" name="email" class="form-control" id="" placeholder="">

        <br/><button type="submit" class="btn btn-default">Créer son compte</button>
    </div>
</form>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>