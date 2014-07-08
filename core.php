<?php

// connexion à la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root' ,'');
}
catch (Execption $e) {
    die('Erreur : '.$e->getMessage());
}