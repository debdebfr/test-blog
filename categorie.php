<?php

require_once 'core.php';

if ( isset($_POST) && isset($_POST['description']) )
{
    $cat = new Categorie($_POST['description']);
    $manager = new CategorieManager($bdd);

    // enregistrement dans la BDD
    $manager->add($cat);

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

<h1>Gestion des catégoeries</h1>

// lister les catégorie dans un tableau

// ajouter avec un form une catégorie

<form action="" method="post">
    <input type="text" name="description" id=""/>
    <input type="submit" value="ajouter"/>
</form>





<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>