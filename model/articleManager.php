<?php

class ArticleManager
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

    public function add(Article $art)
    {
        $req = $this->db->prepare('INSERT INTO article VALUES("", :titre, :contenu, :date, :id_auteur, :id_categorie)');
        $req->execute(array("titre" => $art->getTitre(),
                            "contenu" => $art->getContenu(),
                            "date" => $art->getDate(),
                            "id_auteur" => $art->getIdAuteur(),
                            "id_categorie" => $art->getIdCategorie()));
    }

    public function read($id=NULL)
    {
        $id = "WHERE id=$id";
        if(isset($id)){ $id = $id; }
        $req = $this->db->query('SELECT * FROM article INNER JOIN categorie ON article.id_categorie = categorie.id
        INNER JOIN utilisateur ON article.id_auteur = utilisateur.id');
        $data = $req->fetchAll();


        $d = array();
        foreach ($data as $e)
        {
            $d[] = $e;
        }

        return $d;
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

    public function getArrayArticleById($id)
    {

        $req = $this->db->prepare('SELECT * FROM article WHERE id_auteur = :id');
        $req->execute(array('id' => $id));
        $data = $req->fetchAll();

        $d = array();
        foreach ($data as $e)
        {
            $d[] = $e;
        }

        return $d;
    }

}