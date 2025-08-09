 <!-- # Problem: Reverse words in a string
 # Link: https://leetcode.com/problems/reverse-words-in-a-string -->

<?php
//Return a string of the words in reverse order concatenated by a single space.

class Solution {

    function reverseWords($s) {
        $words = preg_split('/\s+/', trim($s));
        $reversed = array_reverse($words);
        return implode(" ",$reversed);
    }
}

$solution = new Solution();
var_dump($solution->reverseWords("the sky is blue"));