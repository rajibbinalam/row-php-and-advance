<?php
//                      STATUS: Accepted
function romanToInt($s)
{
    $romanToNumberMap = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];

    $romanChars = str_split($s);

    $output = 0;
    $prev = '';
    foreach ($romanChars as $romanChar) {
        $curr = $romanChar;
        if($prev == ''){
            $output += $romanToNumberMap[$romanChar];
        }elseif($romanToNumberMap[$prev] < $romanToNumberMap[$curr]){
            $output = $output - (2 * $romanToNumberMap[$prev]) + $romanToNumberMap[$romanChar];
        }elseif($romanToNumberMap[$prev] >= $romanToNumberMap[$curr]){
            $output += $romanToNumberMap[$romanChar];
        }
        $prev = $romanChar;
    }
    return $output;
}

echo romanToInt('MCMXCIV');
// echo romanToInt('IV');
// echo romanToInt('III');
// echo romanToInt('DCXXI');
// echo romanToInt('MCDLXXVI');