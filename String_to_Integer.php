<?php
            // STATUS: Accepted   ( -Hard -follow solution -Need to understand more about RegEx )
    const BR = '<br/>';
class Solution {

    function myAtoi($s) {
        $str = trim($s);
        $max = pow(2,31)-1;
        $min = pow(-2,31);
        if(preg_match('/^(-|\+)?\d+/', $str, $match)){
            $num = $match[0] - 0;
            $num = $num > $max ? $max : $num;
            $num = $num < $min ? $min : $num;
            return $num;
        }
        return 0;

    }
}

// $s = "   -42";
// $s = "003200";
// $s = "4193 with words";
// $s = "words and 987";
echo (new Solution())->myAtoi($s);