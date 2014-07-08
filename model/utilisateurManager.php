<?php

class utilisateurManager
{
    protected $db;

    //méthodes
    public function pseudoValide($pseudo){

    }

    public function emailValide($email){

    }


    public function add()
    {
        // reception tableau POST du form
        // req $sql insertion

        return true;

    }

    public function read($id=NULL)
    {
        // si $id = null, on recup tous les articles
        // sinon recup uniquement les données d'un article

        // ajouter close WHERE au besoin
    }

    public function delete($id)
    {
        //supression de l'utilisateur
    }

    public function update($id)
    {
        //Mise à jour de l'utilisateur dans la base de données s'il existe
    }
}