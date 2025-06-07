# Two Sum

**Difficulty:** Easy  
**LeetCode:** https://leetcode.com/problems/two-sum/

## Problem Statement

Given an array of integers `nums` and an integer `target`, return indices of the two numbers such that they add up to `target`.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

## Examples
Input: nums = [2,7,11,15], target = 9
Output: [0,1]
Explanation: Because nums[0] + nums[1] == 9, we return [0, 1].

## Solutions

### Approach 1: HashMap (Optimal)
- **Time Complexity:** O(n)
- **Space Complexity:** O(n)

**Key Insight:** Use a HashMap to store seen numbers and their indices for O(1) lookup.

### Approach 2: Brute Force
- **Time Complexity:** O(n²)
- **Space Complexity:** O(1)

**Method:** Check every pair of numbers.

## Code

```php
$solution = new Solution();
$result = $solution->twoSum([2, 7, 11, 15], 9);
// Output: [0, 1]