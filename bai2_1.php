<?php
$ds1 = [];
for ($i = 0; $i < 100; $i++) {
    $ds1[] = rand(6, 666);
}
$ds2 = [];
for ($i = 0; $i < 150; $i++) {
    $ds2[] = rand(6, 666);
}
$ds3 = [];
$ds4=[];
for ($i = 0; $i < count($ds1); $i++) {
    $trung = false;
    for ($j = 0; $j < count($ds2); $j++) {
        if ($ds1[$i] == $ds2[$j]) {
            $isDuplicate = true;
            break;
        }
    }
    if ($isDuplicate) {
        $ds3[] = $ds1[$i];
    } else {
        $ds4[] = $ds1[$i];
    }
}
echo "The duplicate elements of the two lists are:\n ";
for ($i = 0; $i < count($ds3); $i++) {
    echo $ds3[$i] . " ";
}
echo "\nThe elements of list 1 that do not match list 2 are:\n ";
for ($i = 0; $i < count($ds4); $i++) {
    echo $ds4[$i] . " ";
}
?>