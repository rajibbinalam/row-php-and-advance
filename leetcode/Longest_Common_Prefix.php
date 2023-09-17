<?php
//                      STATUS: Accepted

class Solution {

    function longestCommonPrefix($strs) {
        $temp = $strs[0];

        while (strlen($temp) > 0) {
            $match = 0;
            foreach ($strs as $key => $str) {
                if(is_int(strpos($str, $temp)) && strpos($str, $temp) == 0){
                    $match++;
                }
            }
            if($match == count($strs)){
                return $temp;
            }
            $temp = preg_replace('/[a-z,A-Z,0-9]$/', '', $temp);
        }
        return '';
    }
}

$strs = ["flower","flow","flight"];
// $strs = ["dog","racecar","car"];
// $strs = ["c","acc","ccc"];
echo (new Solution())->longestCommonPrefix($strs);