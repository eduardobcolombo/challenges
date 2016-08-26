<?php

class orderWords
{
    public function order($count, $words)
    {
        $wordsCleaned = trim($words);
        $arWords = explode(" ",$wordsCleaned,$count);
        sort($arWords);
        $return = implode(" ",$arWords);
        return $return;
    }
}

$f1 = "4";
$f2 = "quick brown Fox jumps";

$process = new orderWords();
$result = $process->order($f1,$f2);
echo $result;