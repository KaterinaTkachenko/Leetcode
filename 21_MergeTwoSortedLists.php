<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

$arr1 = new ListNode([1, 2, 4]);
$arr2 = new ListNode([1, 3, 4]);

function mergeTwoLists($l1, $l2)
{
    if (empty($l1)) {
        return $l2;
    } elseif (empty($l2)) {
        return $l1;
    } elseif ($l1->val < $l2->val) {
        $l1->next = mergeTwoLists($l1->next, $l2);
        return $l1;
    } else {
        $l2->next = mergeTwoLists($l1, $l2->next);
        return $l2;
    }
}

print_r(mergeTwoLists($arr1, $arr2));
