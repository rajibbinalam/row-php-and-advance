<?php
            // STATUS: Working
class Solution {

    function mergeTwoLists($list1, $list2) {
        $new = array_merge($list1, $list2);
        sort($new);
        return $new;
    }
}

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

$list1 = [1,2,4]; $list2 = [1,3,4];
print_r((new Solution())->mergeTwoLists($list1, $list2));
// print_r((new Solution())->mergeTwoLists($list1, $list2));