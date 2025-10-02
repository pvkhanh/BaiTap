<?php
$list = [];
for ($i = 0; $i < 100; $i++) {
    $list[] = rand(1, 50);
}
$increase = $list;
for ($i = 0; $i < count($increase) - 1; $i++) {
    for ($j = $i + 1; $j < count($increase); $j++) {
        if ($increase[$i] > $increase[$j]) {
            $temp = $increase[$i];
            $increase[$i] = $increase[$j];
            $increase[$j] = $temp;
        }
    }
}
echo "Sometimes the tree increased.\n";
for ($i = 0; $i < count($increase); $i++) {
    echo $increase[$i] . " ";
}
echo "\n\n";
$top50 = [];
for ($i = count($increase) - 1; $i >= count($increase) - 50; $i--) {
    $top50[] = $increase[$i];
}
$the_rest = [];
foreach ($list as $value) {
    $found = false;
    for ($i = 0; $i < count($top50); $i++) {
        if ($value == $top50[$i]) {
            $found = true;
            break;
        }
    }
    if (!$found) {
        $the_rest[] = $value;
    }
}

echo "50 largest numbers + remaining numbers:\n";
foreach ($top50 as $value) {
    if ($value != null) {
        echo $value . " ";
    }
}
foreach ($the_rest as $value) {
    if ($value != null) {
        echo $value . " ";
    }
}
echo "\n\n";
echo "Print the original list, add 0 if < 9 (first time):\n";
$list1 = [];
foreach ($list as $value) {
    if ($value < 9 && !in_array($value, $list1)) {
        echo "0" . $value . " ";
        $list1[] = $value;
    } else {
        echo $value . " ";
    }
}
echo "\n";
?>