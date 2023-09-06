<?php
                    // STATUS: Accepted
const BR = '<br/>';
class Solution
{

    function search($nums, $target)
    {
        return in_array($nums, $target) ? array_search($target, $nums) : -1;

        // if(in_array($target, $nums)){
        //     return array_search($target, $nums); // array_search() -> return the index of array for specific value
        // }
        // return -1;
    }

}
$nums = [4,5,6,7,0,1,2]; $target = 0;
// $nums = [1]; $target = 1;
$nums = [1, 3];
$target = 1;
echo (new Solution())->search($nums, $target);
