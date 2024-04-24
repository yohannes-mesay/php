<?php 
function generateRandomNumbers() {
    $numbers = [];
    for ($i = 0; $i < 10; $i++) {
        $numbers[] = rand(1,20);
    }
    return $numbers;
}

$randomNumbers = generateRandomNumbers();
$minNumber = min($randomNumbers);
$maxNumber = max($randomNumbers);

echo "Minimum number: " . $minNumber . "\n";
echo "Maximum number: " . $maxNumber . "\n";
?>