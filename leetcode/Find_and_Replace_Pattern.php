<?php
//                      STATUS: Accepted ( but see the Solution )

class Solution
{

    function findAndReplacePattern($words, $pattern)
    {
        $patternStr = $this->patternTrans($pattern);

        $resultArr = [];

        for ($i = 0; $i < count($words); $i++) {
            if ($patternStr == $this->patternTrans($words[$i])) {
                array_push($resultArr, $words[$i]);
            };
        }
        return $resultArr;
    }

    function patternTrans($str)
    {
        $strPattern = '';
        $strArr = str_split($str);

        for ($i = 0; $i < strlen($str); $i++) {
            for ($j = $i + 1; $j <= strlen($str); $j++) {
                if (array_key_exists($j, $strArr)) {
                    if ($str[$i] == $str[$j]) {
                        $strPattern .= $i;
                    } else {
                        $strPattern .= $j;
                    }
                }
            }
        }
        return $strPattern;
    }
}

$words = ["abc", "deq", "mee", "aqq", "dkd", "ccc"];
$pattern = "aaa";
print_r((new Solution())->findAndReplacePattern($words, $pattern));
