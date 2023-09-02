<?php
            // STATUS: Accepted
    const BR = '<br/>';
class Solution {

    function removeElement(&$nums, $val) {
        $nums = array_filter($nums, function($value) use($val){
            return $value!=$val;
        });
        print_r($nums);
        echo sizeof($nums);
        return sizeof($nums);
    }
}
// $nums = [3,2,2,3]; $val = 3;
$nums = [0,1,2,2,3,0,4,2]; $val = 2;
echo (new Solution())->removeElement($nums, $val);