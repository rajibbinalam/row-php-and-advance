<?php
//                      STATUS: working

class Solution {

    function largestOddNumber($num) {
        $numArr = str_split($num);

        for ($i=count($numArr); $i > 0; $i--) { 
            $nNum = implode('', $numArr ?? []);
            $nNum = trim(+$nNum);
            if($nNum%2 != 0){
                return $nNum;
            }else if($nNum%2 == 0){
                array_pop($numArr);
            }else{
                return false;
            }
        }
        // return $nNum ?? "";
    }
}
// $s = "2345";
// $s = "52";
$s = "4206";
// $s = "35427";
// $s = "10133890";
echo (new Solution())->largestOddNumber($s);