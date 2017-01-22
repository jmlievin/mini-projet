<?php

namespace app\models;

class Calcul
{
    public function __construct(){}

    public function carre($nb)
    {
        return $nb*$nb;
    }


    public function racineCarre($nb)
    {
        return sqrt($nb);
    }

    public function isNombrePair($nb)
    {
    	if ($n%2 == 0) return TRUE;

    	return FALSE;
    }

}