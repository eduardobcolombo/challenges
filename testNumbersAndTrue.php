<?php

    function testNAndM($string)
    {
        $arData = organizer($string);
        $output = "";
        foreach ($arData['arrayM'] as $m){
            if (in_array($m, $arData['arrayN'])) $output .= "True".PHP_EOL;
            else $output .= "False".PHP_EOL;
        }

        return $output;
    }

    function organizer($string)
    {
        $arrayN =[];
        $arrayM = [];
        $arInput = trim($string);
        $arInput = explode(" ",$arInput);
        $count = 2 + $arInput[0];
        for($i=2;$i<($count); $i++){
            $arrayN[] = $arInput[$i];
        }
        $count = count($arInput);
        for($i;$i<($count); $i++){
            $arrayM[] = $arInput[$i];
        }
        $arPrepared = [
            'n' => $arInput[0],
            'm' => $arInput[1],
            'arrayN' => $arrayN,
            'arrayM' => $arrayM
        ];
        return $arPrepared;
    }


$f = "30 9 146 157 150 172 104 106 148 151 169 114 178 134 165 127 139 177 192 172 132 123 124 121 131 101 189 102 161 112 184 115 177 131 205 999 151 222 169 20 139";




$result = testNAndM($f);
echo $result;

//
//while($f = fgets(STDIN)){
//    echo $f;
//}