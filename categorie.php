<?php

require_once 'core.php';

$manager = new CategorieManager($bdd);
if ( isset($_POST) && isset($_POST['description']) )
{
    $cat = new Categorie($_POST['description']);
    // enregistrement dans la BDD
    $manager->add($cat);

}

$d = $manager->read();

if (isset ($_GET["suppr"]) && !empty($_GET["suppr"]))
{
    $manager->delete($_GET["suppr"]);
    header('location: categorie.php');
}

if (isset ($_GET["update"]) && !empty($_GET["update"]))
{
    $description  
}

?>

<!-- Menu de navigation -->
<?php include('menu.php'); ?>

<div class="container">
    <h1>Gestion des catégories</h1>


    <form role="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="text">Nom de la catégorie</label>
            <input type="text" name="description" class="form-control" id="" placeholder="Nom de la catégorie" value="<?php echo $description ?>">
        </div>
            <button type="submit" class="btn btn-default">Ajouter</button>
    </form>

    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Description</th>
            <th>Supprimer</th>
            <th>Modifier</th>
        </tr>

    <?php foreach($d as $e): ?>

        <tr>
            <td><?php echo $e["id"]?></td>
            <td><?php echo $e["description"]?></td>
            <td><a href="?suppr=<?php echo $e["id"]?>"><button type="button" class="btn btn-default">Supprimer</button></a></td>
            <td><a href="?update=<?php echo $e["id"]?>"><button type="button" class="btn btn-default">Modifier</button></a></td>
        </tr>

    <?php endforeach; ?>

    </table>
</div>

<?php include('footer.php'); ?>