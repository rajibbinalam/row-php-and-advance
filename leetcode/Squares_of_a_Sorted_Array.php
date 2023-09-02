<?php
            // STATUS: Accepted
class Solution {

    function sortedSquares($nums) {
        for ($i=0; $i < count($nums); $i++) {
            $new[] = $nums[$i]*$nums[$i];
        }
        sort($new);
        return $new;
    }
}
// $nums = [-4,-1,0,3,10];
$nums = [-7,-3,2,3,11];
print_r((new Solution())->sortedSquares($nums));
// print_r((new Solution())->sortedSquares($nums));