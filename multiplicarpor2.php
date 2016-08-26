<?php

function multiplyByTwo($number){
    $output = $number * 2;
    $output .= PHP_EOL;
    return $output;
}

while($f = fgets(STDIN)){
    echo multiplyByTwo($f);
}