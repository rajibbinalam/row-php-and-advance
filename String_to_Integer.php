<?php
            // STATUS: Working
    const BR = '<br/>';
class Solution {

    function myAtoi($s) {
        $trim_string = preg_replace('/[^0-9-]/', '', $s);
        return $trim_string = ltrim($trim_string, '0');

        // if($trim_string > -2147483648 && $trim_string < 2147483647-1){
        //     return $trim_string;
        // }
    }
}

// $s = "   _   ____-42";
// $s = "003200";
// $s = "4193 with words";
// $s = "words and 987";
$s = "_____-+123";
echo (new Solution())->myAtoi($s);