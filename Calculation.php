<?php

abstract class Calculation
{
  protected $text = "";

  protected $cost = 0;

  abstract public function calculate($text);

  public function getCost()
  {
    return $this->cost;
  }
}
