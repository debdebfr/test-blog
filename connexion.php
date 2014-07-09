<?php

require_once 'core.php';

$manager = new UtilisateurManager($bdd);

if ( isset($_POST) && isset($_POST['pseudo']) && isset($_POST['password']) )
{
    $userATester = new Utilisateur($_POST['pseudo']);

    if ( $manager->pseudoExist($userATester) )
    {
        $bon_password = $manager->recupPassword($userATester);

        if ($bon_password == $userATester->getPseudo())
        {
            $userOK = $userATester;
            $userOK->setId($manager->recupId($userOK));

            // création de la supervariable session

            $_SESSION['user'] = $userOK;

        }
        else
        {
            // TODO
        }


    }


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

            <br/><button type="submit" class="btn btn-default">Se connecter</button>
        </div>
    </form>

</div>

<?php include('footer.php'); ?>


