<?php

require_once 'core.php';
require_once 'controller/Article.php';
require_once 'model/ArticleManager.php';

$manager = new ArticleManager($bdd);
if ( isset($_POST) && isset($_POST["titre"]))
{
    $art = new Article($_POST['titre'],$_POST['contenu'],$_POST['date'],$_POST['id_auteur'],$_POST['id_categorie']);


    // enregistrement dans la BDD
    $manager->add($art);


}

?>

<!-- Menu de navigation -->
<?php include('menu.php'); ?>


<?php  ?>

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

            <!-- A ajouter avec les données de sessions -->
            <label for="id_auteur">id_auteur</label>
            <input type="text" name="id_auteur" class="form-control" id="" placeholder="Entrez le numéro d'auteur">

            <!-- Recuperer dans la BDD le tableau des categories -->
            <label for="id_categorie">id_categorie</label>
            <input type="text" name="id_categorie" class="form-control" id="" placeholder="Entrez le numéro de la catégorie">

        </div>
        <button type="submit" class="btn btn-default">Ajouter</button>
    </form>
</div>

<?php include('footer.php'); ?>