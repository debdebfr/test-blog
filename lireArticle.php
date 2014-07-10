<?php
if (isset($_GET) && isset($_GET["id"]) ):

include('menu.php');

$manager = new ArticleManager($bdd);
$d = $manager->read();

?>

<div class="container">
    <div class="page-header">
        <h1></h1>
        <br/><br/>
    </div>



</div>

<?php include('footer.php'); ?>

<?php else:
    {
        header('location:index.php');
    }
?>

<?php endif ?>