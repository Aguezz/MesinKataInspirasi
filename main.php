<?php

require_once "Application.php";
require_once "Input.php";
require_once "Calculations/MaxLengthCalculation.php";

echo "Input the text : ";

$text = Input::read();

$app = new Application($text);
$app->register(new MaxLengthCalculation());

try {
  $app->calculate();

  echo "Hasil kata inspirasi : " . $app->getText() . PHP_EOL;
  echo "Total biayanya adalah Rp " . $app->getCostTotal() . PHP_EOL;
} catch (Exception $e) {
  echo $e->getMessage();
}
