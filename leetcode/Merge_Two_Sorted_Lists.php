<?php
            // STATUS: Accepted     [Need to Learn More about Linked List with Program]
class Solution {


    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode $list3
     */
    function mergeTwoLists($list1, $list2) {
        $list3 = $dumy = new ListNode(null);
        while ($list1 != null && $list2 != null) {
            if($list1->val <= $list2->val){
                $list3->next = $list1;
                $list1 = $list1->val;
            }else{
                $list3->next = $list2;
                $list2 = $list2->val;
            }
            $list3 = $list3->next;
        }
        if($list1 != null) $list3->next = $list1;
        if($list2 != null) $list3->next = $list2;
        return $dumy->next;

    }
}

class ListNode {
    public $val;
    public $next;

    public function __construct($val) {
        $this->val = $val;
        $this->next = null;
    }
}

$list1 = [1,2,4]; $list2 = [1,3,4];
print_r((new Solution())->mergeTwoLists($list1, $list2));
// print_r((new Solution())->mergeTwoLists($list1, $list2));