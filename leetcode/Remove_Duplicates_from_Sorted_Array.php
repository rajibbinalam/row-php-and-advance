<?php
            // STATUS: Accepted
    const BR = '<br/>';
class Solution {

    function removeDuplicates(&$nums) {
        $nums = array_unique($nums);
        $curr_size = sizeof($nums);
        return $curr_size;
    }
}
// $nums = [1,1,2];  // => 2, $nums = [1,2,_]
$nums = [0,0,1,1,1,2,2,3,3,4];  // => 5, $nums = [0,1,2,3,4,_,_,_,_,_]
echo (new Solution())->removeDuplicates($nums);