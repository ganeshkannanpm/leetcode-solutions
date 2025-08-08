<!-- # Problem: Valid Palindrome
# Link: https://leetcode.com/problems/valid-palindrome -->
<?php

//Given a string s, return true if it is a palindrome, or false otherwise.

class Solution {

    function isPalindrome($s){

        $s = strtolower(preg_replace("/[^a-zA-Z0-9]/","",$s));
        return $s ===  strrev($s);
    }
    
}

$solution = new Solution();
var_dump($solution-> isPalindrome("A man, a plan, a canal: Panama"));
