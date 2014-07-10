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

    public function getAllUsers()
    {
        $req = $this->db->query('SELECT u.id AS id, u.pseudo AS pseudo, u.email AS email, g.user_grade AS grade
                                 FROM utilisateur u INNER JOIN grade g ON u.id_grade = g.id');
        return $req->fetchAll();

    }

    public function delete($id)
    {
        // suppression de ses articles
        $req = $this->db->prepare('DELETE FROM article WHERE id_auteur = :id');
        $req->execute(array('id'=>$id));
        $req->closeCursor();

        $req = $this->db->prepare('DELETE FROM utilisateur WHERE id = :id');
        $req->execute(array('id'=>$id));
    }

    public function update($id)
    {
        //Mise à jour de l'utilisateur dans la base de données s'il existe
    }
}