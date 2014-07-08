<?php

class Grade
{
    protected $id, $grade;

    public function __construct()
    {

    }

    //setters
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    //getters
    public function getGrade()
    {
        return $this->grade;
    }

    public function getId()
    {
        return $this->id;
    }







}