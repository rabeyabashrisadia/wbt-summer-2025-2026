<?php
// 1. Simple Interest Calculation
$principal = 1000;
$rate = 5;
$time = 2;
$simpleInterest = ($principal * $rate * $time) / 100;

echo "<h3>1. Simple Interest Calculation</h3>";
echo "Principal: $" . $principal . "<br>";
echo "Rate of Interest: " . $rate . "%<br>";
echo "Time Period: " . $time . " years<br>";
echo "-------------------<br>";
echo "<b>Simple Interest = $" . $simpleInterest . "</b><br><br>";


// 2. Check Prime Number
$num = 29;
$isPrime = true;
echo "<h3>2. Prime Number Checker</h3>";
echo "Checking if $num is a Prime Number.<br>";

if ($num < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}

if ($isPrime) {
    echo "Result: $num is a Prime Number.<br><br>";
} else {
    echo "Result: $num is NOT a prime number.<br><br>";
}


// 3. Calculate Factorial
$number = 5;
$factorial = 1;

for ($i = 1; $i <= $number; $i++) {
    $factorial = $factorial * $i;
}

echo "<h3>3. Factorial Calculation</h3>";
echo "The factorial of $number is $factorial<br><br>";


// 4. Sum and Average of Array Elements
$numbers = [10, 20, 30, 40, 50];
$count = count($numbers);
$sum = 0;

for ($i = 0; $i < $count; $i++) {
    $sum = $sum + $numbers[$i];
}

$average = $sum / $count;

echo "<h3>4. Array Sum and Average</h3>";
echo "Array Elements: " . implode(", ", $numbers) . "<br>";
echo "Sum = " . $sum . "<br>";
echo "Average = " . $average . "<br><br>";


// 5. Print Number Pattern
echo "<h3>5. Number Pattern</h3>";
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
    echo "<br>";
}
?>