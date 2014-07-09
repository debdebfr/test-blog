<?php

class utilisateurManager
{
    protected $db;

    public function __construct($db)
    {
        $this->setDB($db);
    }

    public function setDB($db)
    {
        $this->db = $db;
    }

    //méthodes
    public function pseudoValide($pseudo){

    }

    public function emailValide($email){

    }


    public function add(Utilisateur $user)
    {
        $req = $this->db->prepare('INSERT INTO utilisateur VALUES("", :pseudo, :password, :email, 1)');
        $req->execute(array(
                                "pseudo" => $user->getPseudo(),
                                "password" => $user->getPassword(),
                                "email" => $user->getEmail(),
        ));

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