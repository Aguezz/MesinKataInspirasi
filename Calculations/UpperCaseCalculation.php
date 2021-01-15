<?php

require_once __DIR__ . "/Calculation.php";

class UpperCaseCalculation extends Calculation
{
    public const COST_PER_CHAR = 4;

    public function calculate()
    {
        $pattern = "/[A-Z]/";
        $this->totalChars = preg_match_all($pattern, $this->text);

        $this->cost = $this->totalChars * UpperCaseCalculation::COST_PER_CHAR;
    }

    public function getName()
    {
        return "Huruf Besar";
    }
}
