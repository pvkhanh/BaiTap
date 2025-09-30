<?php

$arr = [1, 2, 2, 3, 4, 4, 5, 6];
echo "Các phần tử mảng sau khi loại bỏ trùng lặp là: \n";

print_r(array_unique($arr));
echo "Tổng các phần tử là: " . array_sum($arr) . "\n";

echo "Đảo ngược mảng sau khi lọc trùng là:  \n";
print_r(array_reverse(array_unique($arr)));

?>