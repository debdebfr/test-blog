<?php

class categorieManager
{
    protected $db;


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

    public function delete($id){
        //suppression de la categorie
    }

    public function update($id){
        //Mise à jour de la catégorie dans la BDD si elle existe
    }
}
