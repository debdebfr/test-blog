<?php
    if ( isset($_GET) && isset($_GET["deconnexion"]) )
    {
        session_destroy();
        unset($user);
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
<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li <?php if( $_SERVER['SCRIPT_NAME']== "/blog/index.php"){echo 'class="active"';}; ?>><a href="index.php">Accueil</a></li>
            <li <?php if( $_SERVER['SCRIPT_NAME']== "/blog/article.php"){echo 'class="active"';}; ?>><a href="article.php">Nouvel article</a></li>
            <li <?php if( $_SERVER['SCRIPT_NAME']== "/blog/categorie.php"){echo 'class="active"';}; ?>><a href="categorie.php">Gestion des catégories</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION["user"]) && isset($user) && !empty($user)): ?>
            <p class="navbar-text">Vous êtes connecté en tant que <strong><?php echo $user->getPseudo(); ?></strong></p>
            <li><a href="?deconnexion=1">Se deconnecter</a></li>
        <?php else: ?>

            <li <?php if( $_SERVER['SCRIPT_NAME']== "/blog/connexion.php"){echo 'class="active"';}; ?>><a href="connexion.php">Se connecter</a></li>
            <li <?php if( $_SERVER['SCRIPT_NAME']== "/blog/inscription.php"){echo 'class="active"';}; ?>><a href="inscription.php">S'inscrire</a></li>

        <?php endif ?>
        </ul>
    </div>
</nav>




