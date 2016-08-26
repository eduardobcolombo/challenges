<?php

function printHelloLines($number){
    if ($number > 0 && $number <=100) return str_repeat("Hello".PHP_EOL, $number);

    return "Invalid number";

}

while($f = fgets(STDIN)){
    echo printHelloLines((int)$f);
}