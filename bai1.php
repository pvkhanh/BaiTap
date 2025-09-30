<?php
$ds = [];
for ($i = 0; $i < 100; $i++) {
    $ds[] = rand(1, 50);
}

$tang = $ds;
sort($tang);
echo "Tăng dần:\n" . implode(" ", $tang) . "\n\n";

$top50 = array_slice(array_reverse($tang), 0, 50);


$con_lai = $ds;
foreach ($top50 as $giatri) {
    $index = array_search($giatri, $con_lai);
    if ($index !== false)
        unset($con_lai[$index]);
}
$con_lai = array_values($con_lai);

echo "50 số lớn nhất + phần còn lại:\n" .
    implode(" ", $top50) . " " . implode(" ", $con_lai) . "\n\n";

echo "In danh sách gốc, thêm số 0 nếu < 9 (lần đầu):\n";
$daIn = [];
foreach ($ds as $so) {
    if ($so < 9 && !in_array($so, $daIn)) {
        echo "0$so ";
        $daIn[] = $so;
    } else {
        echo "$so ";
    }
}

?>