<?php

class CategorieManager
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


    public function add(Categorie $cat)
    {
        $req = $this->db->prepare('INSERT INTO categorie VALUES("", :desc)');
        $req->execute(array("desc" => $cat->getDescription()));
    }

    public function read()
    {
        $req = $this->db->query('SELECT * FROM categorie');
        $data = $req->fetchAll();


        $d = array();
        foreach ($data as $e)
        {
            $d[] = $e;
        }

        return $d;
    }

    public function delete($id){
        //suppression de la categorie
    }

    public function update($id){
        //Mise à jour de la catégorie dans la BDD si elle existe
    }
}
