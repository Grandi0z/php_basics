<?php
class Solution {
    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isEvenOddTree($root) {
        if ($root === null) {
            return true; // An empty tree is considered Even-Odd
        }
        
        $queue = []; // Using a regular array as a queue
        array_push($queue, $root);
        $level = 0;
        
        while (!empty($queue)) {
            $size = count($queue);
            $prevValue = $level % 2 == 0 ? INF : -INF; // Initialize previous value
            
            for ($i = 0; $i < $size; $i++) {
                $node = array_shift($queue);
                
                // Check if the current level satisfies the Even-Odd conditions
                if (($level % 2 == 0 && ($node->val % 2 == 0 || $node->val <= $prevValue)) ||
                    ($level % 2 != 0 && ($node->val % 2 != 0 || $node->val >= $prevValue))) {
                    return false;
                }
                
                $prevValue = $node->val;
                
                // Enqueue left and right children if they exist
                if ($node->left !== null) {
                    array_push($queue, $node->left);
                }
                if ($node->right !== null) {
                    array_push($queue, $node->right);
                }
            }
            
            $level++;
        }
        
        return true; // All levels satisfy Even-Odd conditions
    }
}
