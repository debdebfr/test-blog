<?php

// connexion à la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=blog', 'root' ,'');
}
catch (Execption $e) {
    die('Erreur : '.$e->getMessage());
}

date_default_timezone_set('Europe/Paris');
$date = date('Y-m-d', time());

// autoload
function autoloadModel($className) {
    $filename = "model/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

function autoloadController($className) {
    $filename = "controller/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}

spl_autoload_register("autoloadModel");
spl_autoload_register("autoloadController");

session_start();

if (isset($_SESSION['user']))
{
    $user = $_SESSION['user'];
}


