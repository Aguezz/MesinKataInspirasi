<?php

require_once "Contracts/Application.php";
require_once "Calculation.php";

class Application implements ApplicationImp
{
  private $text;

  private $costLengthOfText = 0;

  private $calculations = [];

  public function __construct($text)
  {
    $this->text = $text;
  }

  public function register(Calculation $calculation)
  {
    $this->calculations[] = $calculation;
  }

  public function calculate()
  {
    $this->calculateLengthOfTextCost();

    foreach ($this->calculations as $calculation) {
      $calculation->calculate($this->text);
    }
  }
  
  private function calculateLengthOfTextCost()
  {
    $length = strlen($this->text);
    $this->costLengthOfText = 0.1 * $length;
  }

  public function getCostTotal()
  {
    $cost = $this->costLengthOfText;

    foreach ($this->calculations as $calculation) {
      $cost += $calculation->getCost();
    }

    return $cost;
  }

  public function getText()
  {
    return $this->text;
  }
}
