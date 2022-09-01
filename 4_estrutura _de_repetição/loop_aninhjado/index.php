<?php
$i = 0;

while($i < 5){
    echo "loop EXTERNO $i <br>";

    $j = 1;
    while ($j < 5){
        echo "loop interno $j <br>";
        $j++;
    }

    $i++;
}