<?php

require_once __DIR__ . "/Contracts/Application.php";
require_once __DIR__ . "/Calculations/Calculation.php";
require_once __DIR__ . "/Validations/Validation.php";

class Application implements ApplicationImp
{
	private $text;
	private $validations = [];
	private $calculations = [];

	public function __construct($text)
	{
		$this->text = $text;
	}

	public function addCalculation($calculation)
	{
		$this->calculations[] = new $calculation($this->text);
	}

	public function addValidation($validation)
	{
		$this->validations[] = new $validation($this->text);
	}

	public function getCalculations()
	{
		return $this->calculations;
	}

	public function validate()
	{
		foreach ($this->validations as $validation) {
			$validation->validate();
		}
	}

	public function calculate()
	{
		foreach ($this->calculations as $calculation) {
			$calculation->calculate();
		}
	}

	public function getFinalCost()
	{
		$finalCost = 0;

		foreach ($this->calculations as $calculation) {
			$finalCost += $calculation->getCost();
		}

		return $finalCost;
	}

	public function getText()
	{
		return $this->text;
	}
}
