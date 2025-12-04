<?php

echo "<h3>1. Area & Perimeter of Rectangle</h3>";
$length = 10;
$width = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Length = $length <br>";
echo "Width = $width <br>";
echo "Area = $area <br>";
echo "Perimeter = $perimeter <br><br>";


echo "<h3>2. VAT Calculation (15%)</h3>";
$amount = 1000;
$vat = $amount * 0.15;

echo "Amount = $amount <br>";
echo "VAT = $vat <br>";
echo "Total Amount = " . ($amount + $vat) . "<br><br>";


echo "<h3>3. Check Odd or Even</h3>";
$number = 15;

if($number % 2 == 0){
    echo "$number is Even<br><br>";
} else {
    echo "$number is Odd<br><br>";
}


echo "<h3>4. Largest of Three Numbers</h3>";
$a = 30; 
$b = 20; 
$c = 25;

if($a > $b && $a > $c){
    echo "$a is the largest<br><br>";
} elseif($b > $a && $b > $c){
    echo "$b is the largest<br><br>";
} else {
    echo "$c is the largest<br><br>";
}


echo "<h3>5. Odd Numbers Between 10 to 100</h3>";
for($i = 10; $i <= 100; $i++){
    if($i % 2 != 0){
        echo $i . " ";
    }
}
echo "<br><br>";


echo "<h3>6. Search an Element in an Array</h3>";
$numbers = array(10, 20, 30, 40, 50);
$search = 30;

$found = false;

for($i = 0; $i < count($numbers); $i++){
    if($numbers[$i] == $search){
        $found = true;
        break;
    }
}

if($found){
    echo "$search found in the array";
} else {
    echo "$search not found in the array";
}

?>
