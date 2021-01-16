<?php

require_once __DIR__ . "/Calculation.php";
require_once __DIR__ . "/UpperCaseCalculation.php";

class SymbolCalculation extends Calculation
{
    private const COST_PER_CHAR = 2 * UpperCaseCalculation::COST_PER_CHAR;

    public function calculate()
    {
        $pattern = "/\#|\,|\!/";
        $this->totalChars = preg_match_all($pattern, $this->text);

        $this->cost = $this->totalChars * SymbolCalculation::COST_PER_CHAR;
    }

    public function getName()
    {
        return "Jumlah Simbol (#), (,), (!)";
    }
}
