<?php

class UtilisateurManager
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
    public function pseudoExist(Utilisateur $userATester)
    {
        // req dans la bdd avec whre sur le pseudo de l'object courant
        $req = $this->db->prepare('SELECT * FROM utilisateur WHERE pseudo = :pseudo');
        $req->execute(array(
            "pseudo" => $userATester->getPseudo(),
        ));

        return (bool) $req->fetchColumn();

    }

    public function recupPassword(Utilisateur $userATester)
    {
        $req = $this->db->prepare('SELECT password FROM utilisateur WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $userATester->getPseudo()));

        $d = $req->fetch();

        return $d['password'];
    }

    public function recupId(Utilisateur $userATester)
    {
        $req = $this->db->prepare('SELECT id FROM utilisateur WHERE pseudo = :pseudo');
        $req->execute(array('pseudo' => $userATester->getPseudo()));

        $d = $req->fetch();

        return $d['id'];
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

    public function read($id)
    {
        $req = $this->db->prepare('SELECT * FROM utilisateur WHERE id = :id');
        $req->execute(array('id'=>$id));

        return $req->fetch();
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