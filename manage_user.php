<?php

require_once 'core.php';
$manager = new UtilisateurManager($bdd);
$liste_users = $manager->getAllUsers();

if ( isset($_GET['supprimer']) )
{
    $idASuppr = (int) $_GET['supprimer'];
    $manager->delete($idASuppr);
    header('Location : manage_user.php');
}

?>

<!-- Menu de navigation -->
<?php include('menu.php'); ?>

    <div class="container">
        <div class="row" >
            <h1>Gestion des utilisateurs</h1>

            <table class="table table-striped">
                    <tr>
                        <th>Pseudo</th>
                        <th>Email</th>
                        <th>Grade</th>
                        <th>Supprimer</th>
                        <th>Modifier</th>
                    </tr>
            <?php
                foreach ($liste_users as $e) {
                    ?>
                    <tr>
                        <td><?php echo $e['pseudo']; ?></td>
                        <td><?php echo $e['email']; ?></td>
                        <td><?php echo $e['grade']; ?></td>
                        <td><a href="?supprimer=<?php echo $e['id']; ?>"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-trash"></span></button></a></td>
                        <td><a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
                    </tr>
                    <?php
                }
            ?>
            </table>
        </div> <!-- row >










    </div><!-- container -->
<?php include('footer.php'); ?>