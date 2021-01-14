<?php

require_once __DIR__ . "/../Calculation.php";

class MaxLengthCalculation extends Calculation
{
  public function calculate($text)
  {
    $this->text = $text;

    $length =strlen($this->text);
    if ($length === 130) {
      $this->cost = -3;
    } else if ($length < 130) {
      throw new Exception("Maaf, karakter yang dimasukkan tidak boleh lebih kecil dari 130 karakter. ");
    }
  }
}
