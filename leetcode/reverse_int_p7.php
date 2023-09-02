<?php
//                      STATUS: Accepted
class Solution{

    function reverseInt($x){

        $rev_num = 0;
        while ($x != 0) {
            $rev_num = $rev_num * 10 + $x % 10;
            $x = (int)$x / 10;
        }
        $rev_num /= 10;
        if($rev_num < -2147483648 || $rev_num > 2147483647-1){
            return 0;
        }
        return $rev_num;
    }


}

// echo (new Solution())->reverseInt(1534236469);
echo (new Solution())->reverseInt(-123);

