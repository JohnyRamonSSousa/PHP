<?php

class pessoa {
    function falar(){
        echo "Boa tarde";
    }
}

$johny = new pessoa();

$johny->nome = "johny";

echo $johny->nome;
echo "<br>";
$johny->falar();