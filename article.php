<?php

require_once 'core.php';

$managerCat = new CategorieManager($bdd);
$liste = $managerCat->read();

$manager = new ArticleManager($bdd);


if ( isset($_POST) && isset($_POST["titre"]))
{
    $art = new Article($_POST['titre'],$_POST['contenu'],$_POST['date'],$user->getId(),$_POST['id_categorie']);

    // enregistrement dans la BDD
    $manager->add($art);
}

?>

<!-- Menu de navigation -->
<?php include('menu.php'); ?>




<div class="container">
    <h1>Nouvel article</h1>

    <form role="form-horizontal" action="" method="post">
        <div class="form-group">
            <label for="titre">Titre de l'article</label>
            <input type="text" name="titre" class="form-control" id="" placeholder="Titre de votre article">

            <label for="contenu">Contenu de l'article</label>
            <textarea name="contenu" class="form-control" rows="5" placeholder="Redigez votre article..."></textarea>

            <label for="date">Date de l'article</label>
            <input type="date" name="date" class="form-control" id="" placeholder="Format : AAAA/MM/JJ" value="<?php echo $date; ?>">

            <label for="id_categorie">Catégorie</label>
            <select class="form-control" name="id_categorie">
                <?php foreach ($liste as $e): ?>
                    <option value="<?php echo $e['id']; ?>"><?php echo $e['description']; ?></option>
                <?php endforeach; ?>
            </select>

        </div>
        <button type="submit" class="btn btn-default">Ajouter</button>
    </form>
</div>

<?php include('footer.php'); ?>