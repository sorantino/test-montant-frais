<?php

namespace Geoffroy\TestMontantFrais;

class MontantValidator
{
    public static function validerMontant($montant)
    {
        return is_numeric($montant) && $montant >= 0.01 && $montant <= 200;
    }
}
