<?php

$array = [1, 2, 2, 3, 4, 4, 5, 6];
$uniqueArray = [];
$countUnique  = 0;
$sum  = 0;
for ($i = 0; $i < count($array); $i++) {
    $isDuplicate  = false;
    for ($j = 0; $j < count($uniqueArray); $j++) {
        if ($array[$i] == $uniqueArray[$j]) {
            $trung = true;
            break;
        }
    }
    if (!$isDuplicate ) {
        $uniqueArray[] = $array[$i];
        $countUnique ++;
    }
}

echo "Array after removing duplicates: \n";
for ($i = 0; $i < count($uniqueArray); $i++) {
    echo $uniqueArray[$i] . " ";
}

for ($i = 0; $i < count($array); $i++) {
    $sum  += $array[$i];
}
echo "\nSum of all elements: $sum \n";

echo "Reversed array after removing duplicates: \n";
for ($i = count($uniqueArray) - 1; $i >= 0; $i--) {
    echo $uniqueArray[$i] . " ";
}
echo "\n";

?>