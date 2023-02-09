<?php
$array = [1, 23, 32, 5,43];
$max = '';
$min= '';
for ($i = 0; $i < count($array); $i++)
{
    if ($max == ''){
        $max = $array[$i];
    }
    else {
        if ($array[$i] > $max){
            $max = $array[$i];
        }
    }
}
for ($z = 0; $z < count($array); $z++)
{
    if ($min == ''){
        $min = $array[$z];
    }
    else {
        if ($array[$z] < $min){
            $min = $array[$z];
        }
    }
}

echo "Giá trị lớn nhất là $max <br> "."Giá trị nhỏ nhất là $min";

?>