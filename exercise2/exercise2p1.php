<?php
$str = "Surrya is sun's son name which is surrya";
countWords($str);
print_r(array_count_values(countWords($str)));

function countWords($str)
{
    $str = strtolower($str);
    $strArr = preg_split("/[\s,.)(]+/", $str);
    return $strArr;
}

echo "end";
