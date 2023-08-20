<?php
//                      STATUS: Not Accepted
class Solution {

    function longestPalindrome($s) {
        if(1 > strlen($s) || strlen($s) > 1000){
            return 'Length must be 1 <= s.length <= 1000';
        }
        $split = str_split($s);

        $split_arr = $split;
        $lenght = count($split_arr);

        for($i=$lenght; $i > 1; $i--){

            $splice = array_slice($split,0,$i);
            $arr_rev = array_reverse($splice);

            if($splice == $arr_rev){
                return implode('', $arr_rev);
            }

        }
        return 'No Match';
    }
}


echo (new Solution())->longestPalindrome('cbbd');
