<?php
 $x = 0;

 while($x < 10) {
    echo "o x é $x <br>";

    if($x === 15){
        echo "deu break";
        break;
    }
    $x++;
 }
 echo "saiu do loop";