<?php

class Utilisateur
{
    protected $id, $pseudo, $password, $email, $id_grade;

    public function __construct($pseudo,$password=NULL,$email=NULL)
    {
        $this->setPseudo($pseudo);
        $this->setPassword($password);
        $this->setEmail($email);

        $this->setIdGrade(1);

    }

    public function hashPassword($password){

    }

    public function passwordValide($password){

    }

    public function isConnected(){

    }

    public function connexion($id){

    }

    public function deconnexion($id){

    }


    // Getters
    public function getEmail()
    {
        return $this->email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdGrade()
    {
        return $this->id_grade;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    //Setters
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdGrade($id_grade)
    {
        $this->id_grade = $id_grade;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }




}