<?php

class Article
{
    protected $id, $titre, $contenu, $date, $id_categorie, $id_auteur;

    public function __construct()
    {
        // ici le constructeur
    }

    public function afficherTaille()
    {
        // affichage de la taille suivant la page où l'on se trouve (minifier ou pas)

        // sinon retourner texte complet
    }


    // setters
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdAuteur($id_auteur)
    {
        $this->id_auteur = $id_auteur;
    }

    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    // getters
    public function getContenu()
    {
        return $this->contenu;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdAuteur()
    {
        return $this->id_auteur;
    }

    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    public function getTitre()
    {
        return $this->titre;
    }












}