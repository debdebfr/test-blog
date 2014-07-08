<?php
// connexion à la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root' ,'');
}
catch (Execption $e) {
    die('Erreur : '.$e->getMessage());
}

/*
function loadClass($class)
{

    require_once 'controller/'.$class.'.php';
    require_once 'controller/'.$class.'.php';

}

spl_autoload_register('loadClass');
*/
