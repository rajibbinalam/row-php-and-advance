<?php
//                      STATUS: W

class Solution {

    function findAndReplacePattern($words, $pattern) {
        $x_patterns = str_split($pattern);
        $c = 0;
        foreach ($x_patterns as $key => $x_pattern) {
            $$x_pattern = ++$c;
        }
        print_r($x_patterns->$$x_pattern);


        // $n_arr = [];
        // foreach ($words as $key => $word) {
        //     if(strlen($word) != strlen($pattern)){
        //         continue;
        //     }
        //     $x_words = str_split($word);

        //     foreach ($x_words as $key => $x_word) {
        //         $x_patterns[$key] = $x_words[$key];
        //     }

        //     print_r($x_patterns);
        // }

    }
}

$words = ["abc","deq","mee","aqq","dkd","ccc"]; $pattern = "abb";
echo (new Solution())->findAndReplacePattern($words, $pattern);