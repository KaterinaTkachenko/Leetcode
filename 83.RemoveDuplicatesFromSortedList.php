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

$arr1 = new ListNode([1, 1, 2]);
function deleteDuplicates($head) {
    $current = $head;
   while ($current != null && $current->next != null){
       if($current->next->val == $current->val){
           $current->next = $current->next->next;
       }
       else
           $current = $current->next;
   }
    return $head;
}
print_r(deleteDuplicates($arr1));
