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

<!-- Menu de navigation -->
<?php include('menu.php'); ?>

<div class="container">

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

</div>

<?php include('footer.php'); ?>