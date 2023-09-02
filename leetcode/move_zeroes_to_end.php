<?php
            // STATUS: Accepted
class Solution {

    function moveZeroes(&$nums) {
        $count=0;
        $nums = array_filter($nums, function($value) use(&$count){
            if($value==0){
                $count++;
            }
            return $value!=0;
        });
        // $nums = array_pad($nums,(count($nums)+$count),'0');
        while($count != 0){
            array_push($nums, 0);
            $count--;
        }
        return $nums;
    }
}
// $nums = [3,0,2,3];
$nums = [0,1,0,3,12];
print_r((new Solution())->moveZeroes($nums));
// print_r((new Solution())->moveZeroes($nums));