<?php


$num = 123;

$sum = 0;

$num = (string)$num;

$len = strlen($num);

for ($i=0;$i < $len; $i++) {
    $sum += $num[$i];
}
echo $sum;