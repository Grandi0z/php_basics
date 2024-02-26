<?php 
declare(strict_types=1);

class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function twoSum($nums, $target) {
    for($i = 0; $i <  count($nums); $i++) {
        for($j = 0; $j < count($nums); $j++) {
            if(($i!=$j) && ($nums[$i] + $nums[$j] == $target)) {
                return [$i,$j];
            }
        }
    }
}
}

class SolutionImproved {
    function twoSum($nums, $target){
        $indices = [];
        for($i = 0; $i < $nums; $i++) {
            //let assume we have $nums = [7,5,3,6] and $target = 10
            $complement = $target - $nums[$i]; //first tour we get 10-7 = 3 | 10-5 = 5 | 10-3 = 7 |
            if(array_key_exists($complement, $indices)){ //|$indices is empty|$indices doesn't have key 5|$indices have have 7|
                return [$indices[$complement], $i]; //|...|...|[0,2]
            }
        }
        // Store the current element's index
        $indices[$nums[$i]] = $i; //we get like [7=>0]|[7=>0,5=>1]|[7=>0,5=>1,3=>2]|
    }
}