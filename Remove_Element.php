<?php
            // STATUS: working
    const BR = '<br/>';
class Solution {

    function removeElement(&$nums, $val) {
        $new_nums = [];
         foreach ($nums as $key => $num) {
            if($num != $val){
                array_push($new_nums, $num);
            }
        }
        $k = sizeof($new_nums);
        sort($new_nums);
        print_r($new_nums);
        return $k;
    }
}
// $nums = [3,2,2,3];
// $val = 3;
$nums = [0,1,2,2,3,0,4,2];
$val = 2;
echo (new Solution())->removeElement($nums, $val);