<?php
                    // STATUS: Accepted
const BR = '<br/>';
class Solution
{
    function searchMatrix($matrix, $target) {
        foreach($matrix as $value){
            if(in_array($target, $value)){
                return true;
            }
        }
        return false;
    }
}
$matrix = [[1,3,5,7],[10,11,16,20],[23,30,34,60]]; $target = 3;
echo (new Solution())->searchMatrix($matrix, $target);
