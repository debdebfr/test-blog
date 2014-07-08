<?php

class Grade
{
    protected $id, $description;

    public function __construct(){

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