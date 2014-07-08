<?php

require_once 'core.php';
require_once 'controller/Categorie.php';
require_once 'model/CategorieManager.php';

$manager = new CategorieManager($bdd);
if ( isset($_POST) && isset($_POST['description']) )
{
    $cat = new Categorie($_POST['description']);


    // enregistrement dans la BDD
    $manager->add($cat);


}

$d = $manager->read();


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

<?php foreach($d as $e): ?>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Description</th>
    </tr>
    <tr>
        <td><?php echo $e["id"]?></td>
        <td><?php echo $e["description"]?></td>
    </tr>
</table>

<?php endforeach; ?>







<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>