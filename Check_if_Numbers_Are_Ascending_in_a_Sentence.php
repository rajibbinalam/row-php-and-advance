<?php
//                      STATUS: Accepted
class Solution
{


    function areNumbersAscending($s){
        $numbers_arr = explode(' ', $s);
        $numbers_new_arr = [];
        foreach ($numbers_arr as $key => $value) {
            if(preg_replace("/[^0-9]/", '', $value)){
                array_push($numbers_new_arr, $value);
            }
        }
        $prev = '';
        $curr = '';
        foreach ($numbers_new_arr as $key => $value) {
            $curr = $value;
            if($prev != '' && !($curr > $prev)){
                return 'false';
            }
            $prev = $value;
        }
        return 'true';
    }
}
$s = "1 box has 3 blue 4 red 6 green and 12 yellow marbles";
echo (new Solution())->areNumbersAscending($s);