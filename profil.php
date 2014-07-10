<?php

require_once 'core.php';
$manager = new UtilisateurManager($bdd);
$manager2 = new GradeManager($bdd);
$manager3 = new ArticleManager($bdd);

$user_infos = $manager->read($user->getId());
$user_grade = $manager2->getUserGrade($user->getId());
$liste_articles = $manager3->getArrayArticleById($user->getId());

?>


<!-- Menu de navigation -->
<?php include('menu.php'); ?>

<div class="container">
    <h1>Mon profil</h1>
    <strong>Votre pseudo : </strong><?php echo $user_infos['pseudo']; ?><br/>
    <strong>Votre email : </strong><?php echo $user_infos['email']; ?><br/>
    <strong>Votre grade : </strong><?php echo $user_grade['user_grade']; ?><br/>

    <h3>Mes articles</h3>

<?php
    if (empty($liste_articles))
    {
     echo "Vous n'avez pas encore écrit d'article, commencez à <a href='article.php'>publier</a>.";
    }
    else
    {
    foreach ($liste_articles as $e) { ?>
        <a href="#"><?php echo $e['titre']; ?></a><br/>
    <?php }
    }
?>








</div><!-- container -->
<?php include('footer.php'); ?>