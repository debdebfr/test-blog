<?php

require_once 'core.php';
require_once 'controller/Article.php';
require_once 'model/ArticleManager.php';

$manager = new ArticleManager($bdd);
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


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>