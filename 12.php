<?php

$n = 1000;
$num = 0;

do{
    $n = $n / 2;

    $num++;

}while ($n > 50);

echo "Результат = ".$n.'<br>'." Кол-во итераций = ".$num;