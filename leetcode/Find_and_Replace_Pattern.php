<?php
//                      STATUS: W

class Solution {

    function findAndReplacePattern($words, $pattern) {
        $n_arr = [];
        foreach ($words as $key => $word) {
            if(strlen($word) != strlen($pattern)){
                continue;
            }
            $x_words = str_split($word);
            $x_patterns = str_split($pattern);
            foreach ($x_words as $key => $x_word) {
                $x_patterns[$key] = $x_words[$key];
            }

            print_r($x_patterns);
        }

    }
}

$words = ["abc","deq","mee","aqq","dkd","ccc"]; $pattern = "abb";
echo (new Solution())->findAndReplacePattern($words, $pattern);