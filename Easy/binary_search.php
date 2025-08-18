<!-- # Problem: Binary Search
# Link: https://leetcode.com/problems/binary-search -->
<?php 
//Given an array of integers nums which is sorted in ascending order, 
// and an integer target, write a function to search target in nums. 
// If target exists, then return its index. Otherwise, return -1.

class Solution {

    function search($nums, $target){

        $low = 0;
        $high = count($nums) - 1;

        while($low <= $high){

            $mid = $low + (int)(($high - $low) / 2);

            if($nums[$mid] == $target){
                return $mid;
            }

            if($nums[$mid] < $target){
                $low = $mid + 1;
            }else{
                $high = $mid -1;
            }
        }
        return -1;
    }
}

$solution = new Solution();
var_dump($solution->search([-1,0,3,5,9,12], 2));