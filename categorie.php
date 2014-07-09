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

<!-- Menu de navigation -->
<?php include('menu.php'); ?>

<div class="container">
    <h1>Gestion des catégories</h1>


    <form role="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="text">Nom de la catégorie</label>
            <input type="text" name="description" class="form-control" id="" placeholder="Nom de la catégorie">

            <button type="submit" class="btn btn-default">Ajouter</button>
        </div>
    </form>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Description</th>
        </tr>

    <?php foreach($d as $e): ?>

        <tr>
            <td><?php echo $e["id"]?></td>
            <td><?php echo $e["description"]?></td>
        </tr>

    <?php endforeach; ?>

    </table>
</div>

<?php include('footer.php'); ?>