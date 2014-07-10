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

    public function getById($id)
    {
        $req = $this->db->prepare('SELECT * FROM categorie WHERE id = :id');
        $req->execute(array('id' => $id));

        return $req->fetch();
    }

    public function delete($id){
        $req = $this->db->prepare('DELETE FROM categorie WHERE id = :id');
        $req->execute(array("id" => $id));
    }

    public function update(Categorie $cat)
    {
        $req = $this->db->prepare('UPDATE categorie SET description = :description WHERE id = :id');
        $req->execute(array(
            'description' => $cat->getDescription(),
            'id' => $cat->getId(),
        ));
    }
}
