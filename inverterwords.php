<?php

class inverterWords
{
    public function inverter($input)
    {
        $return = [];
        var_dump($input);
        for ($i=1;$i<=$input[0]; $i++){
            $words = explode(" ",$input[$i]);
            foreach( $words as $word) {
                $return[$i] .= strrev($word)." ";
            }
        }
        return $return;
    }
}


$f = "3
RemoteIo is awesome
Candidates give interview
best candidates are selected";

$ar = explode(PHP_EOL,$f);
$process = new inverterWords();
$result = $process->inverter($ar);
foreach($result as $line){
    echo $line.PHP_EOL;
}


