<?php
$list = [];
$max = $list[0];
$min = $list[0];
$sum = 0;
$even = 0;
$odd = 0;
for ($i = 0; $i < 20; $i++) {
    $list[] = rand(min: 1, max: 100);
}
echo "The original array is: \n";
for ($i = 0; $i < count($list); $i++) {
    echo $list[$i] . " ";
}
echo "\n";

for ($i = 0; $i < count($list); $i++) {
    if ($list[$i] > $max) {
        $max = $list[$i];
    }
}

for ($i = 0; $i < count($list); $i++) {
    if ($list[$i] < $min) {
        $min = $list[$i];
    }
}

for ($i = 0; $i < count($list); $i++) {
    $sum += $list[$i];
}
$avg = $sum / count($list);

echo "The largest value is: $max\n";
echo "The minimum value is: $min\n";
echo "The average value is: $avg\n";


for ($i = 0; $i < count($list); $i++) {
    if ($list[$i] % 2 == 0) {
        $even++;
    } else {
        $odd++;
    }
}
echo "Even numbers are: $even\n";
echo "The odd numbers are: $odd\n";


?>