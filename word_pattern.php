<?php
function patternTrans($str)
{
    $patternStr = '';
    $str_arr = str_split($str);
    for ($i = 0; $i < strlen($str); $i++) {
        for ($n = $i + 1; $n <= strlen($str); $n++) {
            if (array_key_exists($n, $str_arr)){
                if ($str[$i] == $str[$n]) {
                    $patternStr .= $i;
                } else {
                    $patternStr .= $n;
                }
            }
        }
    }
    return $patternStr;
}


echo patternTrans('abaa');
echo '<br>';
echo patternTrans('mnmm');
echo '<br>';
echo patternTrans('abbc');
echo '<br>';
echo patternTrans('pqql');