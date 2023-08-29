<?php
//                      STATUS: Not Accepted
class Solution {

    function addTwoNumbers($l1, $l2) {
        $l1 = implode('', array_reverse($l1));
        $l2 = implode('', array_reverse($l2));
        $sum = $l1 + $l2;
        $sum = array_map('intval', str_split($sum));
        return array_reverse($sum);
    }
}

$l1 = [2,4,3];
$l2 = [5,6,4];
$sol = new Solution();
print_r($sol->addTwoNumbers($l1, $l2));



