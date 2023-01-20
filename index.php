<?php
//101.SymmetricTree

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

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isSymmetric($root) {
        if($root == null)
            return false;
        $root1 = $root->left; $root2 = $root->right;
        if($root1->val !== $root2->val)
            return false;
        else{
            if($root1->left == $root2->right && $root1->right == $root2->left)
                return true;
            else return false;
        }
    }
}

$root = new TreeNode([1,2,2,3,4,4,3]);
$s = new Solution();
echo $s->isSymmetric($root);