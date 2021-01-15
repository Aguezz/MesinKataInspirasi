<?php

require_once __DIR__ . "/Validation.php";

class MaxLengthValidation extends Validation
{
    public function validate()
    {
        $lengthOfText = strlen($this->text);

        if ($lengthOfText < 130) {
            throw new Exception("Panjang karakter tidak boleh lebih kecil dari 130 karakter!");
        }
    }
}
