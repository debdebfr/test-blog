<?php

require_once 'core.php';

$manager = new CategorieManager($bdd);
if ( isset($_POST) && isset($_POST['description']) )
{
    if (isset($_POST['id'])) { $id = $_POST['id'];}

    $cat = new Categorie($_POST['description'], $id=NULL);

    if (isset($_POST['add']))
    {
        $manager->add($cat);
    }
    if (isset($_POST['update']))
    {
        $manager->update($cat);
        header('location: categorie.php');
    }

}

$d = $manager->read();

if (isset ($_GET["suppr"]) && !empty($_GET["suppr"]))
{
    $manager->delete($_GET["suppr"]);
    header('location: categorie.php');
}

if (isset ($_GET["update"]) && !empty($_GET["update"]))
{
    $data = $manager->getById($_GET["update"]);
    $descri = $data['description'];
}
else
{
    $descri = "";
}

?>

<!-- Menu de navigation -->
<?php include('menu.php'); ?>

<div class="container">
    <h1>Gestion des catégories</h1>


    <form role="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="text">Nom de la catégorie</label>
            <input type="text" name="description" class="form-control" id="" placeholder="Nom de la catégorie" value="<?php echo $descri; ?>">
        </div>
            <?php if (isset($_GET["update"]) && !empty($_GET["update"])): ?>

                <button type="submit" class="btn btn-info" name="update">Valider la modification</button>
                <a href="categorie.php"><button type="button" class="btn btn-info" >Annuler</button></a>
                <input type="hidden" name="id" value="<?php echo $_GET["update"]; ?>"/><br/><br/>

            <?php else: ?>

                <button type="submit" class="btn btn-default" name="add">Ajouter</button>

            <?php endif ?>

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