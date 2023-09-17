<?php
//                      STATUS: Accepted

class Solution
{
    function findMedianSortedArrays($nums1, $nums2) {
        $n_arr = array_merge($nums1, $nums2);
        sort($n_arr);
        $arr_count = count($n_arr) / 2;
        if(is_int($arr_count)){
            $arr_count -=1;
            while($arr_count > 0){
                array_pop($n_arr);
                array_shift($n_arr);
                $arr_count--;
            }
            return ($n_arr[0]+$n_arr[1])/2;
        }else{
            while((int)$arr_count > 0){
                array_pop($n_arr);
                array_shift($n_arr);
                $arr_count--;
            }
            return implode($n_arr);
        }
    }
}


// $nums1 = [1,3];$nums2 = [2];
$nums1 = [1,2];  $nums2 = [3,4];
// print_r((new Solution())->findMedianSortedArrays($nums1, $nums2));
echo (new Solution())->findMedianSortedArrays($nums1, $nums2);