<?php

$colors = ['red','yellow','blue','gray','maroon','brown','green'];

$row = 4;
$col = 8;

$table = "<table border='1' cellpadding='20'>";

for ($i = 0; $i < $row; $i++) {

    $table .= "<tr>";

    for ($j = 0; $j < $col; $j++) {
        shuffle($colors);
        $table .= "<td style='background-color:$colors[0]'>".rand(1, 20)."</td>";
    }

    $table .= "</tr>";
}


$table .= "</table>";

echo $table;