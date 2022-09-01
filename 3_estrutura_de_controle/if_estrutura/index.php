<?php
//condição verdadeira
if(5 > 2) {
    echo "Vai passar <br>";
};

//condição falsa
if( 2 >=5){
    echo "não vai passar";
}
//utilizando op. lógico
if( 10 === 10 && 9 >1){
    echo "Esse passar também <br>";
}

//variaáveis
$a = 10;
$b = 5;
$c = "Esse vai passar também <br>";

if($a > $b){
    echo $c;
}