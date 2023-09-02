<?php
            // STATUS: Accepted
class Solution {

    function merge(&$nums1, $m, $nums2, $n) {
        array_splice($nums1, $m, count($nums1));
        array_splice($nums2, $n, count($nums2));
        $nums1 = array_merge($nums1, $nums2);
        sort($nums1);
        return $nums1;
    }
}

$nums1 = [1,2,3,0,0,0]; $m = 3; $nums2 = [2,5,6]; $n = 3;
// $nums1 = [1]; $m = 1; $nums2 = []; $n = 0;

print_r((new Solution())->merge($nums1, $m, $nums2, $n));
// print_r((new Solution())->moveZeroes($nums));