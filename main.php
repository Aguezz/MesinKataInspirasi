<?php

require_once "Application.php";
require_once "Input.php";

require_once "Validations/MaxLengthValidation.php";

require_once "Calculations/NumberCalculation.php";
require_once "Calculations/SpecialCharCalculation.php";
require_once "Calculations/SymbolCalculation.php";
require_once "Calculations/TextLengthCalculation.php";
require_once "Calculations/UpperCaseCalculation.php";

echo "Masukkan kata inspirasi :" . PHP_EOL;
$text = Input::readLine();

$app = new Application($text);

$app->addValidation(MaxLengthValidation::class);

$app->addCalculation(TextLengthCalculation::class); // Aturan 1
$app->addCalculation(UpperCaseCalculation::class); // Aturan 2
$app->addCalculation(SymbolCalculation::class); // Aturan 3
$app->addCalculation(NumberCalculation::class); // Aturan 4
$app->addCalculation(SpecialCharCalculation::class); // Aturan 5

try {
	$app->validate();
} catch (Exception $e) {
	echo $e->getMessage() . PHP_EOL;
	exit();
}

$app->calculate();

echo PHP_EOL;
echo "Hasil kata inspirasi :" . PHP_EOL;
echo $app->getText() . PHP_EOL . PHP_EOL;

echo "Daftar biaya tambahan :" . PHP_EOL;
foreach ($app->getCalculations() as $calculation) {
	echo "- " . str_pad($calculation->getName(), 40) . " : " . $calculation->getCost() . PHP_EOL;
}
echo PHP_EOL;

echo "Jumlah karakter :" . PHP_EOL;
echo strlen($app->getText()) . PHP_EOL . PHP_EOL;

echo "Jumlah setiap simbol :" . PHP_EOL;
foreach ($app->getCalculations() as $calculation) {
	echo "- " . str_pad($calculation->getName(), 40) . " : " . $calculation->getTotalChars() . PHP_EOL;
}
echo PHP_EOL;

echo "Total biaya :" . PHP_EOL;
echo $app->getFinalCost() . PHP_EOL;
