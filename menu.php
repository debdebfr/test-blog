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
            <li <?php if( $_SERVER['SCRIPT_NAME']== "/blog/inscription.php"){echo 'class="active"';}; ?>><a href="inscription.php">S'inscrire</a></li>
        </ul>
    </div>
</nav>




