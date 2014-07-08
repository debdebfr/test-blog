<?php

class articleManager
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

    public function update($id, array $datas)
    {
        // on récup les $data du form
        // on vérifie que l'artcile existe bien
        // si oui on exec la req de modification et return true

        return false;

    }

    public function delete ($id)
    {
        // on vérifie que l'id existe et on exec la req de suppr
    }

}