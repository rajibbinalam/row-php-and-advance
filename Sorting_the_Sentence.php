<?php
//                      STATUS: Accepted
class Solution {

    function sortSentence($s) {
        $new_array = [];
        $numbers_arr = array_map('strrev', explode(' ', $s));
        sort($numbers_arr);
        $numbers_arr = array_map('strrev', $numbers_arr);

        foreach ($numbers_arr as $key => $value) {
            array_push($new_array, preg_replace('/[0-9]/', '', $value));
        }

        return implode(' ', $new_array);
    }
}


// $s = "is2 sentence4 This1 a3";
$s = "Myself2 Me1 I4 and3";
echo (new Solution())->sortSentence($s);

