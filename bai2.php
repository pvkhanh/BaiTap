<?php
    $list1 = [];
    for ($i = 1; $i < 100; $i++) {
        $list1[] = rand(6, max: 666);
    }

    $list2 = [];
    for ($i = 1; $i < 150; $i++) {
        $list2[] = rand(6, max: 666);
    }
    $list3 = array_intersect($list1, $list2);
    echo "Các phần tử trùng nhau của 2 danh sách là:\n ";
    print_r(array_values($list3));

    $list4 = array_diff($list1, $list2);
    echo "Các phần tử của danh sách 1 không trùng vs danh sách 2 là:\n ";
    print_r(array_values($list4));
?>