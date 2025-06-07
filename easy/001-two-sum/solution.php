<?php
/**
 * Problem: Two Sum
 * Difficulty: Easy
 * URL: https://leetcode.com/problems/two-sum/
 * 
 * Given an array of integers nums and an integer target, 
 * return indices of the two numbers such that they add up to target.
 * 
 * Time Complexity: O(n)
 * Space Complexity: O(n)
 * 
 * Approach: HashMap for O(1) lookups
 * 
 * @author Juan Bueno
 * @date 2025-06-07
 */

class Solution {
    /**
     * Find two numbers that add up to target
     * 
     * @param integer[] $nums
     * @param integer $target
     * @return integer[]
     */
    public function twoSum($nums, $target) {
        $map = []; // HashMap: value => index
        
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            
            // Check if complement exists in our map
            if (isset($map[$complement])) {
                return [$map[$complement], $i];
            }
            
            // Store current number and its index
            $map[$nums[$i]] = $i;
        }
        
        return []; // No solution found
    }
    
    /**
     * Brute force approach - O(n²)
     * Keep for comparison
     */
    public function twoSumBruteForce($nums, $target) {
        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $i + 1; $j < count($nums); $j++) {
                if ($nums[$i] + $nums[$j] === $target) {
                    return [$i, $j];
                }
            }
        }
        return [];
    }
}

// Test the solution
$solution = new Solution();

// Test case 1
$nums1 = [2, 7, 11, 15];
$target1 = 9;
$result1 = $solution->twoSum($nums1, $target1);
echo "Test 1: [" . implode(", ", $result1) . "]\n"; // Expected: [0, 1]

// Test case 2
$nums2 = [3, 2, 4];
$target2 = 6;
$result2 = $solution->twoSum($nums2, $target2);
echo "Test 2: [" . implode(", ", $result2) . "]\n"; // Expected: [1, 2]