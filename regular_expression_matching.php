<?php
//                      STATUS: Accepted
class Solution {

    function isMatch($s, $p) {
        $p = preg_replace('/\*+/', '*', $p);
        if(preg_match_all('/^' . $p . '$/', $s)) {
            return 'true';
        }else{
            return 'false';
        }
    }
}
$s = "abc";
$p = "a***abc";
echo (new Solution())->isMatch($s, $p);