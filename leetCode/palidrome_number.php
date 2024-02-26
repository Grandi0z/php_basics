<?php
class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        $val = strval($x);
        $revVal = strrev($val);
        return $val === $revVal ? true : false;
    }
}


class SolutionImproved {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        // Negative numbers are not palindromes
        if ($x < 0) {
            return false;
        }
        
        $val = strval($x);
        $length = strlen($val);
        
        // Check if the string is a palindrome
        for ($i = 0; $i < $length / 2; $i++) { // because we will just check half of the string
            if ($val[$i] !== $val[$length - $i - 1]) { // for both strings reverse order and right order
                return false;
            }
        }
        
        return true;
    }
}
