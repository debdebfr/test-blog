<?php

class Categorie
{
    protected $id, $description;

    public function __construct($desc, $id=NULL){
        $this->setDescription($desc);
        if (isset($id))
        {
            $this->setId($id);
        }
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    //Setters
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }


}