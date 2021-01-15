<?php

abstract class Calculation
{
	protected $text = "";
	protected $cost = 0;
	protected $totalChars = 0;

	public function __construct($text)
	{
		$this->text = $text;
	}

	public function getCost()
	{
		return $this->cost;
	}

	public function getTotalChars()
	{
		return $this->totalChars;
	}

	abstract public function calculate();
	abstract public function getName();
}
