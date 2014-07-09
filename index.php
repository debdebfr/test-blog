<?php

require_once 'core.php';
require_once 'controller/Article.php';
require_once 'model/ArticleManager.php';

$manager = new ArticleManager($bdd);
$d = $manager->read();

?>

<!-- Menu de navigation -->
<?php include('menu.php'); ?>

<div class="container">
    <div class="page-header">
        <h1>Page d'accueil du blog<small> Liste des articles</small></h1>
        <br/><br/>
    </div>

<?php foreach($d as $e): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo $e["titre"]?>
            <div class="pull-right">
                <small><?php echo $e["date"]= date("d/m/Y");  ?><span class="text-right"> | dans <strong><?php echo $e["description"]?></strong></small>
            </div>
        </div>

        <div class="panel-body">
            <p><?php echo $e["contenu"]?></p>
            <div class="pull-right">
                <em>- <?php echo $e["pseudo"]?></em>
            </div>
        </div>
    </div>

    <hr/>
<?php endforeach; ?>

</div>

<?php include('footer.php'); ?>