<?php
$arr = array(1, 3, 8, 2, 5, 7, 4, 0);

print("Sebelum Di Sorting :<br>");
print_r($arr);

$arr = bubble_sort($arr);
print("<br> Setelah Disorting (Buble Sort) :<br>");
print_r($arr);


function bubble_sort($arr)
{
    $a = 0;
    do {
        for ($i = 0; $i < count($arr) - 1; $i++) {
            if ($arr[$i] > $arr[$i + 1]) {
                $a = $arr[$i];
                $b = $arr[$i + 1];
                $arr[$i] = $b;
                $arr[$i + 1] = $a;
            }
        }
        $a++;
    } while ($a <= count($arr) + 1);

    return ($arr);
}
