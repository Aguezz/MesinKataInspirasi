<?php

require_once __DIR__ . "/Calculation.php";

class TextLengthCalculation extends Calculation
{
    public const COST_PER_CHAR = 0.1;
    private const DISCOUNT = 3;

    public function calculate()
    {
        $this->totalChars = strlen($this->text);
        $this->cost = $this->totalChars * TextLengthCalculation::COST_PER_CHAR;

        if ($this->totalChars === 130) {
            $this->cost = $this->cost - TextLengthCalculation::DISCOUNT;
        }
    }

    public function getName()
    {
        return "Panjang Karakter";
    }
}
