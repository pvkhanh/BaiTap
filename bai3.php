<?php
$chuoi = "
IT001=>ITSU0005
IT001=>ITSU0017
IT001=>ITSU0021
IT001=>ITSU0026
IT001=>ITSU0015
IT001=>ITSU0025
";
$mang = explode("\n", $chuoi);
$result = [];
foreach ($mang as $item) {
    if (trim($item) !== '') {
        list($key, $value) = explode("=>", $item);
        $result[$key][] = $value;
    }
}
print_r($result);
echo "\n";

?>