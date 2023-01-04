<?php

class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($val = 0, $left = null, $right = null) {
             $this->val = $val;
             $this->left = $left;
             $this->right = $right;
     }
}
class Solution {

    var $arr=[];
    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        if($root==null){
            return $this->arr;
        }

        self::inorderTraversal($root->left);
        array_push($this->arr,$root->val);
        self::inorderTraversal($root->right);

        return $this->arr;
    }
}
$root = new TreeNode([1,null,2,3]);
$s = new Solution();
print('<pre>'.print_r($s->inorderTraversal($root), true) . '</pre>');