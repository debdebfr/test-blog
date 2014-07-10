<?php

// !!! delete doit supprimer son grade, mais aussi ses articles ???

class GradeManager
{
    protected $db;

    public function __construct($db)
    {
        $this->setDb($db);
    }

    public function setDb($db)
    {
        $this->db = $db;
    }

    const GRADE_ADMIN = 1;
    const GRADE_NEWSER = 2;

    public function addGrade(User $user, $grade)
    {

    }

    public function updateGrade(User $user, $grade)
    {

    }

    public function deleteGrade()
    {

    }

    public function getUserGrade($id)
    {
        $req = $this->db->prepare(' SELECT user_grade FROM utilisateur u INNER JOIN grade g
                                    ON u.id_grade = g.id
                                    WHERE u.id = :id');
        $req->execute(array('id' => $id));

        return $req->fetch();
    }

}