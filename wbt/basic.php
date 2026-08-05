<?php
echo "<h2>Task 1: Area & Perimeter of Rectangle</h2>";
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br>";
echo "Area: " . $area . "<br>";
echo "Perimeter: " . $perimeter . "<br>";
echo "<hr>";



echo "<h2>Task 2: Calculate VAT</h2>";
$amount = 1000;
$vat = $amount * 0.15; // 15% VAT

echo "Amount: " . $amount . "<br>";
echo "VAT (15%): " . $vat . "<br>";
echo "<hr>";


echo "<h2>Task 3: Odd or Even</h2>";
$num = 7;

if ($num % 2 == 0) {
    echo $num . " is Even<br>";
} else {
    echo $num . " is Odd<br>";
}
echo "<hr>";



echo "<h2>Task 4: Find Largest Number</h2>";
$a = 15;
$b = 25;
$c = 20;

if ($a >= $b && $a >= $c) {
    echo "Largest number is: " . $a . "<br>";
} else if ($b >= $a && $b >= $c) {
    echo "Largest number is: " . $b . "<br>";
} else {
    echo "Largest number is: " . $c . "<br>";
}
echo "<hr>";


echo "<h2>Task 5: Odd Numbers Between 10 and 100</h2>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
echo "<br><hr>";


echo "<h2>Task 6: Search Element in Array</h2>";
$array = array(10, 20, 30, 40, 50);
$search = 30;
$found = false;

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $search) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "Element " . $search . " is found in the array.<br>";
} else {
    echo "Element " . $search . " is NOT found in the array.<br>";
}
echo "<hr>";


echo "<h2>Task 7: Print Shapes</h2>";


echo "<b>Shape 1:</b><br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";


echo "<b>Shape 2:</b><br>";
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
echo "<br>";

echo "<b>Shape 3:</b><br>";
$char = 'A';
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
?>