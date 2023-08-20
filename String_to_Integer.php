<?php
            // STATUS: Working
class Solution {

    function myAtoi($s) {
        return preg_replace('/[^0-9-]/', '', $s);
    }
}

// $s = "   _   ____-42";
$s = "003200";
echo (new Solution())->myAtoi($s);