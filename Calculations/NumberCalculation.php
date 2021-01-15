<?php

require_once __DIR__ . "/Calculation.php";
require_once __DIR__ . "/UpperCaseCalculation.php";

class NumberCalculation extends Calculation
{
    private const COST_PER_CHAR = 3 * UpperCaseCalculation::COST_PER_CHAR;

    public function calculate()
    {
        $pattern = "/[0-9]/";
        $this->totalChars = preg_match_all($pattern, $this->text);

        $this->cost = $this->totalChars * NumberCalculation::COST_PER_CHAR;
    }

    public function getName()
    {
        return "Angka";
    }
}
