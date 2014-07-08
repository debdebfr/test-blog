<?php

// !!! delete doit supprimer son grade, mais aussi ses articles ???

class GradeManager
{
    protected $db;

    const GRADE_ADMIN = 1;
    const GRADE_NEWSER = 2;

    public function addGrade(User $user, $grade)
    {
        // on vérifie que l'user existe ainsi que le grade
        // req ajout

    }

    public function updateGrade(User $user, $grade)
    {
        // on vérifie que l'user existe ainsi que le grade
        // on vérifie qu'il n'a pas déjà le même grade > sinon return false

        // req de modiff et return true;
    }

    public function deleteGrade(User $user, $grade)
    {
        // on vérifie que l'user existe ainsi que le grade

        // req de suppresion à partir de l'id
    }
}