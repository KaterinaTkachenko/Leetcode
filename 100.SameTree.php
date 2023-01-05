<?php

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

$p = new TreeNode([]);
$q = new TreeNode([0]);

class Solution
{

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q)
    {
        if ($p->val === null && $q->val === null) {
            return true;
        }
        if ($p->val === null || $q->val === null) {
            return false;
        }

        if ($p->val == $q->val && $p->right == $q->right && $p->left == $q->left)
            return true;
        else
            return false;
    }
}

$s = new Solution();
print('<pre>' . print_r($s->isSameTree($p, $q), true) . '</pre>');