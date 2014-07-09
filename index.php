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

    <h1>Page d'accueil du blog<small> Liste des articles</small></h1>
    <hr/>
    <br/><br/>


<?php foreach($d as $e): ?>

    <h3><?php echo $e["titre"]?></h3>
    <small><?php echo $e["date"]= date("d-m-Y");  ?></small><br/><br/>
    <p><?php echo $e["contenu"]?></p>
    <hr/>
<?php endforeach; ?>

</div>

<?php include('footer.php'); ?>