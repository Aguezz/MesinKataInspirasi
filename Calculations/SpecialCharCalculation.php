<?php

require_once __DIR__ . "/Calculation.php";
require_once __DIR__ . "/UpperCaseCalculation.php";

class SpecialCharCalculation extends Calculation
{
    private const COST_PER_CHAR = 0.5 * UpperCaseCalculation::COST_PER_CHAR;

    public function calculate()
    {
        $pattern = "/\-|\+|\@/";
        $this->totalChars = preg_match_all($pattern, $this->text);

        $this->cost = $this->totalChars * SpecialCharCalculation::COST_PER_CHAR;
    }

    public function getName()
    {
        return "Karakter Spesial (-), (+), (@)";
    }
}
