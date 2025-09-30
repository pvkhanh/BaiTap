<?php
$list = [];
for ($i = 0; $i < 20; $i++) {
    $list[] = rand(min: 1, max: 100);
}

echo "Mảng gốc là: \n";
print_r($list);

$max = max($list);
$min = min($list);
$avg = array_sum($list) / count($list);
echo "Giá trị lớn nhất là: $max\n";
echo "Giá trị nhỏ nhất là: $min\n";
echo "Giá trị trung bình là: $avg\n";

$chan = 0;
$le = 0;
foreach ($list as $value) {
    if ($value % 2 == 0) {
        $chan++;
    } else {
        $le++;
    }
}
echo "Số lượng số chẵn là: $chan\n";
echo "Số lượng số lẻ là: $le\n";
?>