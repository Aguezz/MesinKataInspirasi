<?php

interface ApplicationImp
{
    public function __construct($text);
    public function addCalculation($calculation);
    public function addValidation($validation);
    public function getCalculations();
    public function validate();
    public function calculate();
    public function getFinalCost();
    public function getText();
}
