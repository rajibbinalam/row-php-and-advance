<?php
// STATUS: working
const BR = '<br/>';
class Solution
{

    function search($nums, $target)
    {
        // $k = $target;
        // if(!in_array($target, $nums)){
        //     return -1;
        // }

        // while ($k < count($nums)) {
        //     $new_arr[] = $nums[$k];
        //     $k++;
        // }
        // $i = 0;
        // while ($i < $target) {
        //     $new_arr[] = $nums[$i];
        //     $i++;
        // }
        // print_r($new_arr);

        // return $nums[$target] ?? 0;



        $low = 0;
        $high = count($nums) - 1;
        while ($low <= $high) {
            $mid = ($low + $high) / 2;
        }
        if ($nums[$mid] == $target) {
            return $mid;
        } elseif ($nums[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
        return -1;
    }


    // function binary_search($array, $target)
    // {
    //     $low = 0;
    //     $high = count($array) - 1;
    //     while ($low <= $high) {
    //         $mid = floor(($low + $high) / 2);
    //         if ($array[$mid] == $target) {
    //             return $mid;
    //         } elseif ($array[$mid] < $target) {
    //             $low = $mid + 1;
    //         } else {
    //             $high = $mid - 1;
    //         }
    //     }
    //     return -1;
    // }
}
// $nums = [4,5,6,7,0,1,2]; $target = 0;
// $nums = [1]; $target = 1;
$nums = [1, 3];
$target = 1;
echo (new Solution())->search($nums, $target);
