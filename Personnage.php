<?php

class Personnage
{

    // constante de force
    const FORCE_PETITE = 2;
    const FORCE_MOYENNE = 10;

    protected $nom, $degat;

    public static $compteur = 0;

    public function __construct($nom, $degat, $force)
    {
        $this->setNom($nom);
        $this->setDegat($degat);
        $this->setForce($force);

        self::setCompteur();

    }


    public function frapper(Personnage $perso)
    {
        $perso->degat += $this->getForce();
    }

    public function infos()
    {
        return $this->getNom().' a '.$this->getDegat().' de dégats<br />';
    }

    // setters
    public function setDegat($degat)
    {
        if (!is_int($degat))
        {
            trigger_error('Le dégat doit être un nombre entier', E_USER_WARNING);
            return;
        }
        $this->degat = $degat;
    }

    public function setNom($nom)
    {
        if (!is_string($nom))
        {
            trigger_error('Le nom doit être une chaîne de caractères', E_USER_WARNING);
            return;
        }
        $this->nom = $nom;
    }

    public function setForce($force)
    {
        if (!in_array($force, array(self::FORCE_PETITE, self::FORCE_MOYENNE)))
        {
            trigger_error('Le force doit eêtre assigner à l\'aide d\'une constante', E_USER_WARNING);
            return;
        }
        $this->$force = $force;
    }

    public function setCompteur()
    {
        self::$compteur++;
    }


    // getters
    public function getDegat()
    {
        return $this->degat;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getForce()
    {
        return $this->force;
    }

}

// création de deux personnages
$perso1 = new Personnage('test1', 1, Personnage::FORCE_MOYENNE);
$perso2 = new Personnage('test2', 2, Personnage::FORCE_PETITE);

$perso1->frapper($perso2);
$perso1->frapper($perso2);
$perso2->frapper($perso1);

echo $perso1->infos();
echo $perso2->infos();

echo '<br /><br />Nombre d\'instanciation : '. Personnage::$compteur;
